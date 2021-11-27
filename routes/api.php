<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(["namespace" => "App\Http\Controllers\Admin"], function () {
//    Route::get("/products", "ProductController@index");
//    Route::post("/products", "ProductController@addForm");
//    Route::delete("/products/remove/{id}", "ProductController@remove");
//    Route::get("/products/{id}", "ProductController@detail");

    ////
//    Route::get("/categories", "CategoryController@index");
//    Route::post("/categories", "CategoryController@addForm");
//    Route::delete("/categories/remove/{id}", "CategoryController@remove");
//    Route::get("/categories/{id}", "CategoryController@detail");
//    ///
//    Route::get("/brands", "BrandController@index");
//    Route::post("/brands", "BrandController@addForm");
//    Route::delete("/brands/remove/{id}", "BrandController@remove");
//    Route::get("/brands/{id}", "BrandController@detail");
//
//    ///
//    Route::get("/users", "UserController@index");
//    Route::post("/users", "UserController@addForm");
//    Route::delete("/users/remove/{id}", "UserController@remove");
//    Route::get("/users/{id}", "UserController@detail");
//});
