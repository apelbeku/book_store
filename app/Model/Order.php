<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = [
    	'user_id', 'total',
    ]
}
