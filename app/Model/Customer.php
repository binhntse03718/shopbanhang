<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function customer() {
        return $this->hasMany('App\Model\Bill', 'id_customer', 'id');
    }
}
