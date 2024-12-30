<?php

namespace App\Models;

use Altwaireb\World\Models\City as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{

    use HasFactory;

    protected $fillable = [
        'country_id',
        'state_id',
        'name',
        'latitude',
        'longitude',
        'is_active',
    ];

}
