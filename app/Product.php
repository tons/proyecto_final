<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = ['name', 'image', 'category_id', 'brand_id', 'description', 'price', 'stock', 'status'];
    protected $visible = ['name', 'image', 'category_id', 'brand_id', 'description', 'price', 'stock', 'status'];

    public function Brandof()
    {
        return $this->belongsTo('Brand');
    }

    public function orderDetails()
    {
        return $this->hasMany('OrderDetails');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
