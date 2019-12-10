<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model 
{

    protected $table = 'payments';
    public $timestamps = true;
    protected $fillable = ['method', 'status', 'date'];
    protected $visible = ['method', 'status', 'date'];

    public function orders()
    {
        return $this->hasMany('OrderModel');
    }

}