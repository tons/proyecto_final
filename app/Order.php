<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = ['user_id', 'shipping_id', 'payment_id', 'total', 'status', 'date'];
    protected $visible = ['user_id', 'shipping_id', 'payment_id', 'total', 'status', 'date'];

    public function paymentof()
    {
        return $this->belongsTo('Payment');
    }

    public function orderDetails()
    {
        return $this->hasMany('OrderDetails');
    }

    public function customerof()
    {
        return $this->belongsTo('Customer');
    }

    /*
    public function orderDetails()
    {
        return $this->belongsTo('Shipping');
    }
    */

}
