<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerritoryWithNumbers extends Model
{
    use HasFactory;

    protected $fillable = [
      'mobile_number','territory_name','short_name'
    ];

}
