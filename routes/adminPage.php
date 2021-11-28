<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(["namespace" => "App\Http\Controllers\Admin"], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::prefix('product')->group(function () {
        Route::get("/", "ProductController@index")->name("product.index");
        Route::get("/add", "ProductController@addForm")->name("product.add");
        Route::post("/add", "ProductController@saveAdd");
        Route::get("/edit/{id}", "ProductController@editForm")->name("product.edit");
        Route::post("/edit/{id}", "ProductController@saveEdit");
        Route::get("/remove/{id}", "ProductController@remove")->name("product.remove");
//        Route::get("/detail", "ProductController@detail")->name("product.detail");
    });

    Route::prefix('category')->group(function () {
        Route::get("/", "CategoryController@index")->name("category.index");
        Route::get("/add", "CategoryController@addForm")->name("category.add");
        Route::post("/add", "CategoryController@saveAdd");
        Route::get("/edit/{id}", "CategoryController@editForm")->name("category.edit");
        Route::post("/edit/{id}", "CategoryController@saveEdit");
        Route::get("/remove/{id}", "CategoryController@remove")->name("category.remove");
//        Route::get("/detail", "CategoryController@detail")->name("category.detail");
    });


});
