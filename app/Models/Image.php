<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['title', 'paths'];

    protected $casts = [
        'paths' => 'array', // convert JSON to array automaticaly
    ];
}
