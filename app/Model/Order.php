<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = [
    	'user_id', 'customer_name', 'total',
    ];

    public function OrderDetails()
    {
    	return $this->hasMany('App\Model\OrderDetail');
    }
}
