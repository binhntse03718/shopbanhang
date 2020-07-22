<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function product_type() {
        return $this->belongsTo('App\Model\ProductType', 'id_type', 'id');
    }

    public function bill() {
        return $this->hasMany('App\Model\BillDetail', 'id_bill', 'id');
    }
}
