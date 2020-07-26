<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bill";

    public function bill_detail() {
        return $this->hasMany('App\Model\BillDetail', 'id_bill', 'id');
    }

    public function bill() {
        return $this->belongsTo('App\Model\Customer', 'id_customer', 'id');
    }

    public $timestamps = false;
}
