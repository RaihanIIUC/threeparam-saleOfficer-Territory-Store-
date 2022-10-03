<?php

namespace App\Http\Livewire;


use App\Models\Store;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class StoreDatatables extends LivewireDatatable
{
    public $model = Store::class;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('SL')
                ->defaultSort('desc'),
            Column::name('name')
                ->label('Name'),
            Column::name('code')
            ->label('Store Id'),
            
              Column::callback(['id','name'], function ($id, $name) {
                return view('table-actions', ['id' => $id,'name'=> $name]);
            })->unsortable()
        ];
    }
}
