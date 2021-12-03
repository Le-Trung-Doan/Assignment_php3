<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request  $request) {
        $categories = Category::orderByDesc('id')->get();

        return response()->json($categories);
    }

    public function saveAdd(CategoryRequest $request) {
        $model = new Category();
        if (!$model){
            return back();
        }
        $model->fill($request->all());
        $model->save();
    }

    public function edit($id) {
        $model = Category::find($id);
        if(!$model){
            return back();
        }
        return response()->json($model);
    }

    public function saveEdit(CategoryRequest $request,$id) {
        $model = Category::find($id);
        if(!$model) {
            return back();
        }
        $model->fill($request->all());
        $model->save();
    }

    public function remove($id) {
        $model = Category::find($id);
        Product::where("cate_id", $id)->get()->delete();
        $model->delete();
    }
}
