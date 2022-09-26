<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class VoucherHead extends Component
{

    public function __construct()
    {
    }


    public function render()
    {
        return view('components.dashboard.voucher_head');
    }
}
