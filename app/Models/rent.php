<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rent extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'brand',
        'price',
        'plate',
        'description',
        'image',
        'status',

    ];

  
}
