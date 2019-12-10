<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model 
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = ['user_id', 'shipping_id', 'payment_id', 'total', 'status', 'date'];
    protected $visible = ['user_id', 'shipping_id', 'payment_id', 'total', 'status', 'date'];

    public function paymentof()
    {
        return $this->belongsTo('PaymentModel');
    }

    public function orderDetails()
    {
        return $this->hasMany('OrderDetailsModel');
    }

    public function customerof()
    {
        return $this->belongsTo('CustomerModel');
    }

    public function orderDetails()
    {
        return $this->belongsTo('ShippingModel');
    }

}