<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Models\Feedback;
use App\Models\Salon;
use App\Models\Slot;
use App\Models\User;
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
    $salons = Salon::all();
    $users = User::where('role', 'User')->get();
    $feedbacks = Feedback::orderBy('id', 'DESC')->paginate(3);
    $available_slots = Slot::orderBy('id', 'ASC')->where('status', 'Available')->get();
    return view('welcome', compact('salons', 'users', 'feedbacks', 'available_slots'));
});
Route::resource('appointments', '\App\Http\Controllers\AppointmentsController');
Route::resource('feedbacks', '\App\Http\Controllers\FeedbackController');
Auth::routes();
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin_dashboard', '\App\Http\Controllers\Admin\DashboardController@index');
    Route::resource('users', '\App\Http\Controllers\UserController');
    Route::resource('salons', '\App\Http\Controllers\SalonController');
    Route::resource('stocks', '\App\Http\Controllers\StockController');
    Route::resource('slots', '\App\Http\Controllers\SlotsController');

});
Route::group(['middleware' => ['user']], function () {
    Route::get('/general_dashboard', '\App\Http\Controllers\General\DashboardController@index');
    Route::resource('stock_requests', '\App\Http\Controllers\StockRequestsController');
});
