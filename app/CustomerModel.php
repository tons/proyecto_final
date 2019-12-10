<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'last_name', 'email', 'password', 'phone');
    protected $visible = array('name', 'last_name', 'email', 'password', 'phone');

    public function orders()
    {
        return $this->hasMany('OrderModel');
    }

}