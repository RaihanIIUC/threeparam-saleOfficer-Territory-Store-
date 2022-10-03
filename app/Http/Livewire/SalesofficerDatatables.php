<?php

namespace App\Http\Livewire;

use App\Models\SalesOfficer;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Livewire\Component;


class SalesofficerDatatables extends LivewireDatatable
{
    public $model = SalesOfficer::class;
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('SL'),
            Column::name('terittory')
                ->label('Territory'),
            Column::name('mobile')
            ->label('Mobile'),
            Column::name('short_name')
            ->label('Short Name'),
            Column::name('full_name')
            ->label('Full Name'),
            
              Column::callback(['id','short_name'], function ($id, $short_name) {
                return view('table-actions', ['id' => $id,'name'=> $short_name]);
            })->unsortable()
        ];
    }
}