<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_product";

    public function product() {
        return $this->hasMany('App\Model\Product', 'id_type', 'id');
    }

    public $timestamps = false;
}
