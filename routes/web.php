<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Entity;

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

Route::prefix('products')->controller(PageController::class)->name('products.')->group(function() {
    Route::get('/', 'pageProducts')->name('index');
    Route::get('/{entity}', 'pageProductOverview')->name('overview');
});

Route::prefix('services')->controller(PageController::class)->name('services.')->group(function() {
    Route::get('/', 'pageServices')->name('index');
    Route::get('/{service}', 'pageServiceOverview')->name('overview');
});

Route::prefix('works')->controller(PageController::class)->name('works.')->group(function() {
    Route::get('/', 'pageWorks')->name('index');
    Route::get('/{entity}', 'pageWorkOverview')->name('overview');
});

Route::prefix('blog')->controller(PageController::class)->name('blog.')->group(function() {
    Route::get('/', 'pageBlog')->name('index');
    Route::get('/{post}', 'pageBlogOverview')->name('overview');
});

// en, id
// Route::prefix('{lang}')->group(function() {
//     Route::get('/')->name('homepage');

//     Route::prefix('products')->controller()->name('products')->group(function() {
//         Route::get('/')->name('index');
//         Route::get('/{category}')->name('category');
//         Route::get('/{category}/{product}')->name('view');
//         Route::get('/{category}/{product}/support')->name('support');
//     });
// });

Route::get('view-service', function () {
    $service = Entity::find(1);
    dd($service);
});
