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


Route::get('/', function () {
    return view('FE.pages.index');
});


Route::group(['prefix' => 'shop'], function () {

    Route::get('/', function () {
        return view('FE.pages.product');
    });

    Route::get('/product', function () {
        return view('FE.pages.product');
    });
    Route::get('/product-details', function () {
        return view('FE.pages.product-details');
    });
    Route::get('/checkout', function () {
        return view('FE.pages.checkout');
    });
    Route::get('/cart', function () {
        return view('FE.pages.cart');
    });
    Route::get('/login', function () {
        return view('FE.pages.login');
    });
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        return view('FE.pages.blog');
    });
    Route::get('/blog-list', function () {
        return view('FE.pages.blog');
    });
    Route::get('/blog-single', function () {
        return view('FE.pages.blog-single');
    });
});
Route::get('/404', function () {
    return view('FE.pages.404');
});
Route::get('/contact-us', function () {
    return view('FE.pages.contact-us');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('BE.pages.index');
    });
});
