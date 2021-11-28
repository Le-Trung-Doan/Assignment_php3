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
        $categories = Category::where('name', 'like', "%$request->keyword%")->get();
        $keyword = $request->keyword;
        return view('admin.categories.index', compact('categories', 'keyword'));
    }

    public function addForm() {
        return view('admin.categories.addCategory');
    }

    public function saveAdd(CategoryRequest $request) {
        $model = new Category();
        if (!$model){
            return back();
        }
        $model->fill($request->all());
        $model->save();
        return (redirect(route('category.index')));
    }

    public function editForm($id) {
        $model = Category::find($id);
        if(!$model){
            return back();
        }
        return view('admin.categories.editCategory', compact('model'));
    }

    public function saveEdit(CategoryRequest $request,$id) {
        $model = Category::find($id);
        if(!$model) {
            return back();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('category.index'));
    }

    public function remove($id) {
        $model = Category::find($id);
        Product::where("cate_id", $id)->get()->delete();
        $model->delete();
        return redirect(route('category.index'));
    }
}
