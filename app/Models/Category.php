<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //protected $fillable = ['title', 'slug', 'image', 'content', 'date'];


    public function posts(): HasMany 
    {
        # code...
        return $this->hasMany(Post::class);
    }
}
