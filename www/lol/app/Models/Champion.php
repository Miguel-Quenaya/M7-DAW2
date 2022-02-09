<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = [
        'idchampion',
        'title',
        'blurb',
        'image_full',
        'image_sprite'
    ];
}
