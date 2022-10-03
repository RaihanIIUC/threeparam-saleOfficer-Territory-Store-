<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{

    public function addNewItemPage(){
        return view('components.dashboard.item-add');
    }

    public function addNewTerritoryPage(){
        return view('components.dashboard.add.territory-add');
    }
    
    public function addNewTerritorywithNumberPage(){
        return view('components.dashboard.add.territory_with_number-add');
    }
    public function addNewStorePage(){
        return view('components.dashboard.add.store-add');
    }

    public function addNewSalesOfficersPage(){
        return view('components.dashboard.add.sales_officer-add');
    }
    public function CancelButton(){
        return redirect()->to('/');
    }
}
