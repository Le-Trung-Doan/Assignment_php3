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
        $pageSize = 10;
        $column_names = [
            'name' => 'Tên sản phẩm',
            'price' => 'Giá',
            'star' => "Đánh giá",
            'views' => 'Lượt xem'
        ];

        $order_by = [
            'asc' => 'Tăng dần',
            'desc' => 'Giảm dần'
        ];

        $keyword = $request->has('keyword') ? $request->keyword : "";
        $cate_id = $request->has('cate_id') ? $request->cate_id : "";
        $rq_order_by = $request->has('order_by') ? $request->order_by : 'asc';
        $rq_column_names = $request->has('column_names') ? $request->column_names : "id";

        // dd($keyword, $cate_id, $rq_column_names, $rq_order_by);
        $query = Product::where('name', 'like', "%$keyword%");
        if($rq_order_by == 'asc'){
            $query->orderBy($rq_column_names);
        }else{
            $query->orderByDesc($rq_column_names);
        }

        if(!empty($cate_id)){
            $query->where('cate_id', $cate_id);
        }
        $products = $query->paginate($pageSize);
        // giữ lại các giá trị đang tìm kiếm trong link phần trang
        $products->appends($request->input());

        $categories = Category::all();
        $searchData = compact('keyword', 'cate_id');
        $searchData['order_by'] = $rq_order_by;
        $searchData['column_names'] = $rq_column_names;
        $products->load('category', 'brand');
        return view('admin.products.index', compact('products', 'categories', 'column_names', 'order_by', 'searchData'));
    }

    public function addForm() {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.addProduct', compact('categories', 'brands'));
    }

    public function saveAdd(ProductRequest $request) {
        $model = new Product();
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/uploads/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('product.index'));
    }

    public function editForm($id) {
        $products = Product::find($id);
        if(!$products){
            return back();
        }
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.editProduct', compact('products', 'categories', 'brands'));
    }

    public function saveEdit(ProductRequest $request, $id) {
        $model = Product::find($id);
        if(!$model){
            return back();
        }
        if($request->hasFile('image')){
            $oldImg = str_replace('storage/', 'public/', $model->image);
            Storage::delete($oldImg);

            $imgPath = $request->file('image')->store('public/uploads/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('product.index'));
    }

    public function remove($id) {
        $model = Product::find($id);
        if(!empty($model->image)){
            $imgPath = str_replace('storage/', 'public/', $model->image);
            Storage::delete($imgPath);
        }
        $model->delete();

        return redirect(route('product.index'));
    }
}
