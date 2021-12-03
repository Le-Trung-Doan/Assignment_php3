<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        $brand = Brand::all();
        return response()->json($brand);
    }

    public function  remove($id) {
        $model = Brand::find($id);
        $model->delete();
    }
}
