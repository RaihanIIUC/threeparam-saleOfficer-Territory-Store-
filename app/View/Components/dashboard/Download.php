<?php

namespace App\View\Components\dashboard;

use App\Models\download__message;
use Illuminate\View\Component;

class Download extends Component
{
    public $downloaded_msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->downloaded_msg = download__message::paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.download');
    }


}
