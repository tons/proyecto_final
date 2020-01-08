<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model 
{

    protected $table = 'brands';
    public $timestamps = true;
    protected $fillable = ['name', 'status'];
    protected $visible = ['name', 'status'];

    public function products()
    {
        return $this->hasMany('ProductModel');
    }

}