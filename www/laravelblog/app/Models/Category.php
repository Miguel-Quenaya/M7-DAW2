<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    function posts(){
        
        return $this->hasMany(Post::class);
    }

    static function getFromCache(){
        return Cache::get('categories', function () {
            return Cache::rememberForever('categories', function () {
                return Category::all();
            });
        });
    }
}
