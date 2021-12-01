<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("client.index");
    }

    public function product() {
        $categories = Category::all();
        $products = Product::all();
        return view("client.product", compact('categories', 'products'));
    }
}
