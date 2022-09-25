<?php

namespace App\Http\Livewire;

use App\Models\TerritoryWithNumbers;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TerritorywithnumberDatatables extends LivewireDatatable
{

    public $model = TerritoryWithNumbers::class;
  
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
            Column::name('mobile_number')
                ->label('Mobile No'),
            Column::name('territory_name')
            ->label('territory_name'),
            Column::name('short_name')
            ->label('short_name')
        ];
    }
}
