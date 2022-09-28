<?php

namespace App\Http\Livewire\Add;

use App\Models\TerritoryWithNumbers;
use Livewire\Component;

class TerritorywithnumberForm extends Component
{

    public $mobile_number, $territory_name,
     $short_name;
   
    public function submit()
    {
        $validatedData = $this->validate([
            'mobile_number' => 'required',
            'territory_name' => 'required',
            'short_name'=> 'required'
             ]);
        TerritoryWithNumbers::create($validatedData);
   
   
        return redirect()->to('/terittories-with-number')->with('success', 'Territory with Number Added Successfully !');   ;
    }

    public function render()
    {
        return view('livewire.add.territorywithnumber-form');
    }
}
