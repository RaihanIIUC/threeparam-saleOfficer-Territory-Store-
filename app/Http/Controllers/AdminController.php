<?php

namespace App\Http\Controllers;

use App\Models\error_message;
use App\Models\SalesOfficer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function edit_error_msg_by_id($id){
    $idx = error_message::where('id',$id)->first();
    
    return view('dashboard.error_msg_edit',['data'=> $idx]);
   }


  

}
