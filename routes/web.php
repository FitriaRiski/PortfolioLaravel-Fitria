<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('home', function () {
    return view('home');
});

Route::get('/pfanimasi', function () {
    return view('pfanimasi');
});

Route::get('/pfdetails', function () {
    return view('pfdetails');
});

Route::get('/portjar', function () {
    return view('portjar');
});

Route::get('/portproto', function () {
    return view('portproto');
});

Route::get('/portweb', function () {
    return view('portweb');
});









Route::resource('posts', PostController::class);
// Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
// Route::post('/blog', [PostController::class, 'store'])->name('blog.store');


// Route::resource('blogs', BlogController::class);
