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
    return view('layout.frontpage-new');
});

Route::get('/products', function () {
    return view('layout.products-new');
});

Route::get('/product-detail', function () {
    return view('layout.product-single-new');
});

Route::get('/product-detail-old', function () {
    return view('layout.product-single');
});

Route::get('/services', function () {
    return view('layout.services-new');
});

Route::get('/services-old', function () {
    return view('layout.services');
});


Route::get('/service-detail', function () {
    return view('layout.service-detail');
});

Route::get('/service', function () {
    return view('layout.service-single');
});


// en, id
// Route::prefix('{lang}')->group(function() {
//     Route::prefix('products')->controller()->name('products')->group(function() {
//         Route::get('/')->name('index');
//         Route::get('/{category}')->name('category');
//         Route::get('/{category}/{product}')->name('view');
//         Route::get('/{category}/{product}/support')->name('support');
//     });
// });


