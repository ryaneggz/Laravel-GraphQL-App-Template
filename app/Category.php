<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // protected $guarded = [];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
