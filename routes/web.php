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
Route::group(["namespace" => "App\Http\Controllers"], function () {

    Route::get('/', "HomeController@index")->name('home.index');
    Route::get('/product', "HomeController@product")->name('home.product');



    Route::post('login', "AuthController@postLogin")->name('login');
    Route::any('logout', function () {
        Auth::logout();
        return redirect(route('home.index'));
    })->name('logout');

});
