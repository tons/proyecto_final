<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'status'];
    protected $visible = ['name', 'description', 'status'];

    public function products()
    {
        return $this->hasMany('ProductModel');
    }

}