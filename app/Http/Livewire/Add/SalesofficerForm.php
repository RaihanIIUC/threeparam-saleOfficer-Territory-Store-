<?php

namespace App\Http\Livewire\Add;

use App\Models\SalesOfficer;
use Livewire\Component;

class SalesofficerForm extends Component
{
    public $name, $code;
   
    public function submit()
    {
        $validatedData = $this->validate([
            'terittory' => 'required',
            'mobile' => 'required',
            'short_name' => 'required',
            'full_name' => 'nullable',
             ]);
        SalesOfficer::create($validatedData);
   
   
        return redirect()->to('/sales_officer')->with('success', 'Sales Officers Added Successfully !');   ;
    }

    public function render()
    {
        return view('livewire.add.salesofficer-form');
    }
}
