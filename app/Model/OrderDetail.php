<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $fillable = [
    	'book_id', 'order_id', 'price', 'qty', 'subtotal',
    ]
}
