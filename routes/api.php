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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

// auth

Route::group(["namespace" => "App\Http\Controllers\Auth"], function () {
    Route::post('signin', "AuthController@postLogin");
    Route::any('logout', "AuthController@logout");
});

// web

Route::group(["namespace" => "App\Http\Controllers\Client"], function () {
    //    Route::get("/products", "ProductController@index");
//    Route::post("/products", "ProductController@addForm");
//    Route::delete("/products/remove/{id}", "ProductController@remove");
//    Route::get("/products/{id}", "ProductController@detail");
//
//    ////
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
});


// admin

Route::group(["namespace" => "App\Http\Controllers\Admin"], function () {
    Route::get("/products", "ProductController@index");
    Route::post("/products", "ProductController@saveAdd");
    Route::delete("/products/remove/{id}", "ProductController@remove");
    Route::get("/products/{id}", "ProductController@edit");
    Route::patch("/products/{id}", "ProductController@saveEdit");
    Route::get("/products/sale", "ProductController@sale");


    ////
    Route::get("/categories", "CategoryController@index");
    Route::post("/categories", "CategoryController@saveAdd");
    Route::delete("/categories/remove/{id}", "CategoryController@remove");
    Route::get("/categories/{id}", "CategoryController@edit");
    Route::patch("/categories/{id}", "CategoryController@saveEdit");

    ///
    Route::get("/brands", "BrandController@index");
    Route::post("/brands", "BrandController@addForm");
    Route::delete("/brands/remove/{id}", "BrandController@remove");
    Route::get("/brands/{id}", "BrandController@detail");

    ///
    Route::get("/users", "UserController@index");
    Route::post("/users", "UserController@addForm");
    Route::delete("/users/remove/{id}", "UserController@remove");
    Route::get("/users/{id}", "UserController@detail");
});
