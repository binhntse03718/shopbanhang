<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function product() {
        return $this->belongsTo('App\Model\Product', 'id_product', 'id');
    }

    public function bill() {
        return $this->belongsTo('App\Model\Bill', 'id_type', 'id');
    }

    public $timestamps = false;
}
