<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class Additem extends Component
{

    public $item_name;
    public $item_id;

    public function submit()
    {
        // echo 2231;
    //   Log::info('Submit');
    //   dd('hello');
   
        return redirect()->to('/form');
    }
    public function render()
    {
        return view('livewire.additem');
    }
}
