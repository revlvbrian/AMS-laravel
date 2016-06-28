<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Asset extends Eloquent
{
    protected $fillable = [
        'serial_number',
        'asset_name',
        'asset_type',
        'remarks',
        'asset_image'
    ];
}