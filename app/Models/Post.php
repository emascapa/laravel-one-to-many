<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //
    protected $fillable = ['title', 'slug', 'image', 'content', 'date'];

    public function category(): BelongsTo
    {
        # code...
        return $this->belongsTo(Category::class);
    }
    
}
