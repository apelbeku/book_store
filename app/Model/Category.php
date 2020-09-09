<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
    	'name',
    ];

    public function Book()
    {
    	return $this->hasMany('App\Model\Book');
    }
}
