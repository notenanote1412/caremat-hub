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

//Route admin
Route::get('/admin/signin' , [BookingController::class, 'adminsignin']);
Route::get('/admin' , [BookingController::class, 'adminpage'])->name('home');

//Route Clinic Config
Route::get('/clinic_config' , [BookingController::class, 'clinic_config']);
Route::get('/clinic_config_temp' , [BookingController::class, 'clinic_config_temp']);
Route::get('/ajax_getData' , [BookingController::class, 'getClinic_config']);
Route::post('/edit_clinic', [BookingController::class, 'edit_clinic']);

//Route Holidays
Route::get('/getHoliday' , [BookingController::class, 'getHoliday']);
Route::post('/insert_holidays' , [BookingController::class, 'insert_holidays']);
Route::post('/delete_holidays' , [BookingController::class, 'delete_holidays']);
Route::post('/update_holiday' , [BookingController::class, 'update_holiday']);

//Route WorkTime
Route::get('/getOpening_Hours' , [BookingController::class, 'getOpening_Hours']);
Route::post('/update_workTimes', [BookingController::class, 'update_workTimes']);








Auth::routes();

// Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
