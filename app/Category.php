<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'body'
    ];

    public function posts(){
        return $this -> hasMany(Post::class);
    }
}
