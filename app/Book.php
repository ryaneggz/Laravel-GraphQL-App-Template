<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    // protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
