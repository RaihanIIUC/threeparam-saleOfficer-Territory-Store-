<?php

namespace App\Http\Livewire;

use App\Models\response_log;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ResponseDatatables extends LivewireDatatable
{
    public $model = response_log::class;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            Column::name('timeStamp')
                ->label('timeStamp'),
           Column::name('address')
                ->label('address'), 
           Column::name('statusDetail')
                ->label('statusDetail'), 
           Column::name('statusCode')
                ->label('statusCode')
        ];
    }
}
