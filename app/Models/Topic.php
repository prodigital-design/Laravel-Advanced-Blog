<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name', 'slug', 'image'];

//    public function articles()
//    {
//        return $this->hasMany(Article::class);
//    }
}
