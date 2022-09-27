<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use League\CommonMark\Reference\Reference;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [BookingController::class, 'index']);
Route::get('/services', [BookingController::class, 'services']);

Route::post('/select_service', [BookingController::class, 'select_service']);
Route::post('/select_time', [BookingController::class, 'select_time']);
Route::get('/info' , [BookingController::class, 'info_form']);

Route::post('/info_input', [BookingController::class, 'info_input']);

Route::get('/info_req' , [BookingController::class, 'info_request']);

Route::get('/admin' , [BookingController::class, 'adminpage'])->name('home');
Route::get('/clinic_config' , [BookingController::class, 'clinic_config']);
Route::get('/clinic_config_temp' , [BookingController::class, 'clinic_config_temp']);

Route::get('/ajax_getData' , [BookingController::class, 'getClinic_config']);
Route::get('/getHoliday' , [BookingController::class, 'getHoliday']);
Route::get('/getOpening_Hours' , [BookingController::class, 'getOpening_Hours']);


Auth::routes();

// Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
