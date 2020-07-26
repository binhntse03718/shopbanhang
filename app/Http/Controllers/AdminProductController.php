<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class AdminProductController extends Controller
{
    public function listProduct() {
        $product = Product::all();
        return view('layout_admin.Product.listProduct', ['product' => $product]);
    }

    public function get_addProduct() {
        return view('layout_admin.Product.addProduct');
    }

    public function post_addProduct(Request $request) {
        // $this->validate($request, ['name' => 'required', 'description' => 'required', 'unit_price' => 'required', 'image' => 'required', 'unit' => 'required', 'new' => 'required'],
        // ['name.required' => 'Tên không được để trống', 'description.required' => 'Description không được để trống', 'unit_price.required' => 'Unit Price không được để trống', 'image.required' => 'Ảnh không được để trống', 'unit.required' => 'Unit không được để trống', 'new.required' => 'New không được để trống']);

        $product = new Product;
        $product -> name = $request -> name;
        $product -> id_type = $request -> id_type;
        $product -> description = $request -> description;
        $product -> unit_price = $request -> unit_price;
        $product -> promotion_price = $request -> promotion_price;
        $product -> image = $request -> image;
        $product -> unit = $request -> unit;
        $product -> new = $request -> new;

        $product -> save();

        return redirect('admin/product/addProduct');
    }
}
