<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::orderByDesc('id')->get();
        return response()->json($products);
    }

    public function sale() {
        $products = Product::orderByDesc('id')->get();
        return response()->json($products);
    }

    public function saveAdd(Request $request) {
//        return response($request->all());
        $model = new Product();
//        if($request->hasFile('image')){
//            $imgPath = $request->file('image')->store('public/uploads/products');
//            $imgPath = str_replace('public/', '', $imgPath);
//            $model->image = $imgPath;
//        }
        $model->fill($request->all());
        $model->save();
    }

    public function edit($id) {
        $products = Product::find($id);
        if(!$products){
            return back();
        }
        return response()->json($products);
    }
//
    public function saveEdit(Request $request, $id) {
        $model = Product::find($id);
        if(!$model){
            return back();
        }
//        if($request->hasFile('image')){
//            $oldImg = str_replace('storage/', 'public/', $model->image);
//            Storage::delete($oldImg);
//
//            $imgPath = $request->file('image')->store('public/uploads/products');
//            $imgPath = str_replace('public/', '', $imgPath);
//            $model->image = $imgPath;
//        }
        $model->fill($request->all());
        $model->save();
    }

    public function remove($id) {
        $model = Product::find($id);
//        if(!empty($model->image)){
//            $imgPath = str_replace('storage/', 'public/', $model->image);
//            Storage::delete($imgPath);
//        }
        $model->delete();
    }
}
