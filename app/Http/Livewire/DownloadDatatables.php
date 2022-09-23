<?php

namespace App\Http\Livewire;

use App\Models\download__message;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class DownloadDatatables extends LivewireDatatable
{

    public $model = download__message::class;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('sl')
                ->label('SL')
                ->defaultSort('desc')

       ,

    //    NumberColumn::raw('download__messages.sl orderby sl desc' ),
       
  
            Column::name('message_text')
                ->label('Message'),
  
            Column::name('mobile_number')
            ->label('Mobile No'),
  
            DateColumn::name('msg_date')
                ->label('msg_date')
        ];
    }
}