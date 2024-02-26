<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
// Route::group(['middleware' => ['admin']], function () {
//     Route::get('admin-home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
//  });

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});
Route::group(['middleware' => ['user']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
