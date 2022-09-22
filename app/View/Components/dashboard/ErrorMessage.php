<?php

namespace App\View\Components\dashboard;

use App\Models\error_message;
use Illuminate\View\Component;

class ErrorMessage extends Component
{
    public $error_messages = array();
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->error_messages = error_message::paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.error-message');
    }
}
