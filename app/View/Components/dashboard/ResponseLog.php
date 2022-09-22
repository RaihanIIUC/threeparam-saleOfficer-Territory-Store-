<?php

namespace App\View\Components\dashboard;

use App\Models\response_log;
use Illuminate\View\Component;

class ResponseLog extends Component
{

    public $response_logs = array();
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response_logs = response_log::paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.response-log');
    }
}
