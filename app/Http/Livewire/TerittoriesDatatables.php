<?php

namespace App\Http\Livewire;

use App\Models\Territory;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TerittoriesDatatables extends LivewireDatatable 
{
    public $model = Territory::class;
  
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
            Column::name('territory')
                ->label('territory'),
            Column::name('union_name')
            ->label('Union'),
            Column::name('thana')
            ->label('thana'),
            Column::name('dist')
            ->label('dist'),
            Column::name('division')
            ->label('division'),
            
                Column::callback(['id','territory'], function ($id, $territory) {
                return view('table-actions', ['id' => $id,'name'=> $territory]);
            })->unsortable()
        ];
    }
}
