<?php

namespace App\View\Components\dashboard;

use App\Models\Item;
use Illuminate\View\Component;

class ItemList extends Component
{

    public $Items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.item-list');
    }
}
