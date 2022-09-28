<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\error_message;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ItemDatatables extends LivewireDatatable
{
    public $model = Item::class;
  
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
            Column::name('item_id')
                ->label('Item ID'),
            Column::name('name')
            ->label('Item Name'),
            Column::callback(['id'], function ($id) {
                return view('components.partials.items-actions', ['id' => $id]);
            })->unsortable()
        ];
    }
}
