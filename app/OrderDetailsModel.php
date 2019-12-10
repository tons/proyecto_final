<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailsModel extends Model 
{

    protected $table = 'order_product';
    public $timestamps = true;
    protected $fillable = ['order_id', 'product_id', 'product_name', 'product_price', 'product_sales_quantity'];
    protected $visible = ['order_id', 'product_id', 'product_name', 'product_price', 'product_sales_quantity'];

    public function orderdetailsof()
    {
        return $this->belongsTo('OrderModel');
    }

    public function orderdetailsof()
    {
        return $this->belongsTo('ProductModel');
    }

}