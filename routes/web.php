<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;

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
    return view('user/index');
});

Route::get('/profile', function () {
    return view('user/profile');
});

Route::get('/list', function () {
    return view('user/list');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::resource('authors', AuthorController::class);
Route::resource('news', NewsController::class);
