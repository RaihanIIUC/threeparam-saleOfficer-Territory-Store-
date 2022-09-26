<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class Salesofficers extends Component
{   
    
    public function __construct()
    {
     
    }
  
    public function render()
    {
        return view('components.dashboard.sales_officer');
    }
}
