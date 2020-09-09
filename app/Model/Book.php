<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = [
    	'category_id', 'name', 'price', 'code_book',
    ];

    public function Category()
    {
    	return $this->belongsTo('App\Model\Category');
    }
}
