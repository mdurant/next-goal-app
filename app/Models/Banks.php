<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;

    // All fillable properties with fields Migrations Banks
    protected $fillable = [

        'code',
        'name',
        'status',
    ];
}
