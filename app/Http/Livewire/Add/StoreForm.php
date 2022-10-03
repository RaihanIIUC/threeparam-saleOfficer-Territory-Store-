<?php

namespace App\Http\Livewire\Add;

use App\Models\Store;
use Livewire\Component;

class StoreForm extends Component
{

    public $name, $code;
    
    public function loaderCheck(){
        return redirect()->to('/stores');
    }
   
    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'code' => 'required'
             ]);
        Store::create($validatedData);
   
   
        return redirect()->to('/stores')->with('success', 'Store Added Successfully !');   ;
    }

    public function render()
    {
        return view('livewire.add.store-form');
    }
}
