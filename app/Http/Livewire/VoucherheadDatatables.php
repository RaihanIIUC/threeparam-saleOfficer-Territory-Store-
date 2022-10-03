<?php

namespace App\Http\Livewire;

use App\Models\Territory;
use App\Models\VoucherHead;
use App\Models\User;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class VoucherheadDatatables extends LivewireDatatable
{
    public $model = VoucherHead::class;
  
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('sl')
                ->label('SL'),
  
            Column::name('sales_officer')
                ->label('SalesOfficer')
                ->filterable(),
            Column::name('mobile_number')
            ->label('Mobile')
            ->filterable(),
            Column::name('territory')
            ->label('Territory')
            ->filterable(),

            Column::name('store_id')
            ->label('Store ID')
            ->filterable(),
            Column::name('amount')
            ->label('Amount'),
            
            DateColumn::name('created_at')->filterable(),

        ];
    }
}

