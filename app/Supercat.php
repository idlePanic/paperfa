<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supercat extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
