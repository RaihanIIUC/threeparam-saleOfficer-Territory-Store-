<?php

namespace App\View\Components\dashboard;

use App\Models\Territory;
use Illuminate\View\Component;

class Territtory extends Component
{

    public $territtories = array();

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->territtories = Territory::paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.territtory');
    }
}
