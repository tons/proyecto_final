<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
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
