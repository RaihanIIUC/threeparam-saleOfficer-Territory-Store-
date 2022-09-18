<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOfficer extends Model
{
    use HasFactory;


    protected $fillable = [
        'terittory','mobile','short_name','full_name'
    ];

}
