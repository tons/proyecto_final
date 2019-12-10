<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model 
{

    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = ['name', 'image', 'category_id', 'brand_id', 'description', 'price', 'stock', 'status'];
    protected $visible = ['name', 'image', 'category_id', 'brand_id', 'description', 'price', 'stock', 'status'];

    public function Brandof()
    {
        return $this->belongsTo('BrandModel');
    }

    public function orderDetails()
    {
        return $this->hasMany('OrderDetailsModel');
    }

    public function Categoryof()
    {
        return $this->belongsTo('CategoryModel');
    }

}