<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemForm extends Component
{
    public $name;
    public $item_id;
   
    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'item_id' => 'required'
             ]);
        Item::create($validatedData);
   
   
        return redirect()->to('/item')->with('success', 'Item Added Successfully !');   ;
    }

    // public function render()
    // {
    //     return view('livewire.item-form');
    // }
}
