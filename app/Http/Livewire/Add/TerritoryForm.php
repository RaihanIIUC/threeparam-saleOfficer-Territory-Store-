<?php

namespace App\Http\Livewire\Add;

use App\Models\Territory;
use Livewire\Component;

class TerritoryForm extends Component
{
    public $territory;
    public $union_name;
    public $thana, $dist, $division;
   
    public function submit()
    {
        $validatedData = $this->validate([
            'territory' => 'required',
            'union_name' => 'nullable',
            'thana'=> 'nullable',
            'dist'=> 'nullable',
            'division' => 'nullable'
             ]);
        Territory::create($validatedData);
   
   
        return redirect()->to('/terittories')->with('success', 'Territory Added Successfully !');   ;
    }


    public function render()
    {
        return view('livewire.add.territory-form');
    }
}
