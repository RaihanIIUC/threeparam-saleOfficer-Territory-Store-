<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Logger;

use App\Classes\SMSSender;
use App\Classes\SMSReceiver;
use App\Classes\SMSServiceException;

use App\Models\download__message;
use App\Models\error_message;
use App\Models\Item;
use App\Models\response_log;
use Session;

use App\Models\SalesOfficer;

use App\Models\Store;
use App\Models\Territory;
use App\Models\TerritoryWithNumbers;
use App\Models\VoucherHead;
use Exception;
use Illuminate\Support\Facades\Log;

class BdappsController extends Controller
{
    //
    protected $cur_date; //= date("Y-m-d");
    protected $prev_date; // = date('Y-m-d', strtotime('-7 days'));
    protected $time;

    public function __construct()
    {
        date_default_timezone_set("Asia/Dhaka");
        $this->cur_date = date('Ymd');
        $this->time = date('h:i:s');
        $this->prev_date = date('Y-m-d', strtotime('-7 days'));
    }



    public function split_msg($string)
    {
        $string = strtoupper($string);
        $strings = explode(".", $string);

        $splited_string = explode(".", $string);

        Log::info($splited_string);
        //print_r($strings);
        if (sizeof($splited_string) == 4) {
            $strings = str_split($strings[3]);
            Log::info($strings);

            //print("<br>");
            $ch = "c";
            $i = 0;
            $prod = "";
            $val = "";
            $arr = array();
            foreach ($strings as $char) {
                if (!is_numeric($char)) {
                    if ($ch == "c") $prod .= $char;
                    else {
                        $arr[$i++] = $prod;
                        $prod = $char;
                        $ch = "c";
                    }
                }
                if (is_numeric($char)) {
                    if ($ch == "n") $prod .= $char;
                    else {
                        $arr[$i++] = $prod;
                        $prod = $char;
                        $ch = "n";
                    }
                }
                $arr[$i] = $prod;
            }
            $final = array(
                $arr,
                $splited_string
            );
            return $final;
        } else {
            $final = "error";
            return $final;
        }
    }


    public function sms(Request $request)
    {

        $server = 'https://developer.bdapps.com/sms/send';
        $appid = "APP_068563";
        $apppassword = "7a1c7d3429b2c574007e07bf5acec366";
        $logger = new Logger();

        try {
            $receiver = new SMSReceiver(file_get_contents('php://input'));

            $sender = new SMSSender($server, $appid, $apppassword);

            $message = $receiver->getMessage(); // Get the message sent to the app
            $address = $receiver->getAddress(); // Get the phone no from which the message was sent
            $appid = $receiver->getApplicationId(); // Get the phone no from which the message was sent
            $error_msg = "";

            $a = explode(" ", $message);
            $b = " ";
            for ($i = 1; $i < sizeof($a); $i++) {
                $b = $b . ' ' . $a[$i];
            }
            $message = $b;
            $message = trim($message);

            try {
                date_default_timezone_set("Asia/Dhaka");
                $current_date = date('Y-m-d H:i:s');
                $text = $this->split_msg($message);

                $final_address = trim($address, "tel:");

                if ($text == "error") {
                    $error_msg .= 'Message text not correectly formatted';
                } else {
                    $arr = $text[0];
                    $string = $text[1];

                    $officer = $string[0];
                    $territory = $string[1];
                    $store = $string[2];


                    $sql_officer = SalesOfficer::where('short_name', 'LIKE', $officer . '%')->where('terittory', 'LIKE', $territory)->first();
                    if (!$sql_officer) {
                        $error_msg .= $officer . " Not in " . $territory . ' Territory,';
                    }

                    $sql = Territory::where('territory', 'LIKE', $territory . '%')->first();
                    if (!$sql) {
                        $error_msg .= $territory . " Not found in territory" . ',';
                    }

                    $sql_store = Store::where('code', 'LIKE', $store . '%')->first();
                    if (!$sql_store) {
                        $error_msg .= $store . " Not found in our store list" . ',';
                    }



                    $second_last_index = sizeof($arr) - 2;

                    $last_index = sizeof($arr) - 1;
                    $total_value_text = $arr[$second_last_index];
                    $tv = 0;
                    if ($total_value_text != 'TV') {
                        $error_msg .= 'TV not found' . ',';
                    }else{
                       $tv = $arr[$last_index];
                       Log::info($tv);
                    }

                    $items = array();
                    for ($i = 0; $i < (sizeof($arr) / 2) - 1; $i++) {
                        $item = $arr[2 * $i];
                        array_push($items, trim($item));
                        $qty = $arr[2 * $i + 1];
                        $sql = Item::where('item_id', $item)->first();
                        if (!$sql) {
                            $error_msg .= $item . " Not found" . ',';
                        }
                    }
                    $item_count = array_count_values($items);
                    foreach ($item_count as $key => $value) {
                        if ($value > 1) {
                            $error_msg .= $key . " contains " . $value . ' times ,';
                        }
                    }



                    $route_with_number = TerritoryWithNumbers::where('mobile_number', $final_address)->where('short_name', 'LIKE', $territory . '%')->first();
                    if (!$route_with_number) {
                        $error_msg .= $final_address . " is not associated with " . $territory . ' territory ,';
                    }
                }
                if ($error_msg) {

                    $error = error_message::create(['msg_date' => $current_date, 'mobile_number' => $final_address, 'sms_text' => $message, 'error_report' => $error_msg, 'status' => 0]);

                    error_message::where('id', $error->id)
                        ->update(['sl' => $error->id]);
                } else {

                    $download_msg = download__message::create(['mobile_number' => $final_address, 'message_text' => $message, 'msg_date' => $current_date]);

                    $last_id = $download_msg->id;
                    download__message::where('id', $last_id)->update(['sl' => $last_id]);

                    Log::info('inside');

                    VoucherHead::create(['sl' => $last_id, 'sales_officer' => $officer,
                     'msg_date' => $current_date,
                      'od_date' => $current_date,
                       'mobile_number' => $final_address, 
                       'territory' => $territory,
                       'store_id'=> $store,
                       'amount' => $tv]);

                    Log::info('outside');

                }

              
                // todo: helloo 
                // ! helloo 
                // ? helloo 
                // * helloo 

                

            } catch (Exception $e) {
            }

            $response = $sender->sms('Thanks for your response', $address);
            response_log::create(['timeStamp'=>$response->timeStamp,'address'=>$response->address,'messageId'=>$response->messageId,'statusDetail'=>$response->statusDetail,'statusCode'=>$response->statusCode]);

        } catch (SMSServiceException $e) {
            $logger->WriteLog($e->getErrorCode() . " " . $e->getErrorMessage() . "\n");
        }
    }
}
