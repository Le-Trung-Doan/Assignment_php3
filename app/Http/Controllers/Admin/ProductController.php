<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        $products->load('category', 'brand');
        return view('admin.products.index', compact('products'));
    }

    public function addForm() {
        return view('admin.products.addProduct');
    }

    public function saveAdd(Request $request) {

    }

    public function editForm() {

    }

    public function seveEdit() {

    }

    public function remove() {

    }

    public function detail() {

    }
}
