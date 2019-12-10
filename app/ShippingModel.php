<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingModel extends Model 
{

    protected $table = 'shipping';
    public $timestamps = true;
    protected $fillable = ['shipping_name', 'shipping_address', 'shipping_email', 'shipping_phone'];
    protected $visible = ['shipping_name', 'shipping_address', 'shipping_email', 'shipping_phone'];

    public function orders()
    {
        return $this->hasMany('OrderModel');
    }

}