<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Validator;
use Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminProductController extends Controller
{
    public function listProduct5() {
        $product = Product::paginate(5);
        return view('layout_admin.Product.listProduct', ['product' => $product]);
    }

    public function listProduct10() {
        $product = Product::paginate(10);
        return view('layout_admin.Product.listProduct', ['product' => $product]);
    }

    public function get_addProduct() {
        return view('layout_admin.Product.addProduct');
    }

    public function post_addProduct(Request $request) {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required',
            'image' => 'required',
            'unit' => 'required',
            'new' => 'required',
            'name' => 'min:3|max:255',
            'description' => 'min:3|max:255',
            ];
        $messages = [
            'name.required' => 'Name không được để trống',
            'description.required' => 'Description không được để trống',
            'unit_price.required' => 'Unit Price không được để trống',
            'image.required' => 'Image không được để trống',
            'unit.required' => 'Unit không được để trống',
            'new.required' => 'New không được để trống',
            'name.min' => 'Name tối thiểu từ 3 kí tự',
            'name.max' => 'Name tối đa 255 kí tự',
            'description.min' => 'Description tối thiểu từ 3 kí tự',
            'description.max' => 'Description tối đa 255 kí tự',
            ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

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

        return redirect('admin/product/addProduct')->with('success','Thêm product thành công');
    }

    public function get_changeProduct($id) {
        $product = Product::find($id);
        return view('layout_admin.Product.changeProduct', ['product' => $product]);
    }

    public function post_changeProduct(Request $request, $id) {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required',
            'image' => 'required',
            'unit' => 'required',
            'new' => 'required',
            'name' => 'min:3|max:255',
            'description' => 'min:3|max:255',
            ];
        $messages = [
            'name.required' => 'Name không được để trống',
            'description.required' => 'Description không được để trống',
            'unit_price.required' => 'Unit Price không được để trống',
            'image.required' => 'Image không được để trống',
            'unit.required' => 'Unit không được để trống',
            'new.required' => 'New không được để trống',
            'name.min' => 'Name tối thiểu từ 3 kí tự',
            'name.max' => 'Name tối đa 255 kí tự',
            'description.min' => 'Description tối thiểu từ 3 kí tự',
            'description.max' => 'Description tối đa 255 kí tự',
            ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

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

        return redirect('admin/product/changeProduct')->with('success','Sửa product thành công');
    }

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/product/listProduct')->with('success', 'Xóa product thành công');
    }
}
