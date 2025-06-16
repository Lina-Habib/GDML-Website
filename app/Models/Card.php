<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $fillable = ['name', 'image_path', 'domain', 'range', 'color'];
}
