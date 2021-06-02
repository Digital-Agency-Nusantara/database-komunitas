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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/view', function () {
    return view('photo');
});

//Route::get('/upload', [App\Http\Controllers\UploadController::class, 'upload']);
//Route::post('/upload/proses', [App\Http\Controllers\UploadController::class, 'proses_upload']);

Route::resource('/posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
