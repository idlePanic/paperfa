<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['fa_name','eng_name'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function supercat()
    {
        return $this->belongsTo(Supercat::class);
    }
}
