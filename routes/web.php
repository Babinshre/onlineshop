<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Models\coupon;
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
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::post('/admin/auth',[AdminController::class,'auth']);
Route::middleware(['admin_auth'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    // Route::get('/admin/category',[CategoryController::class,'index'])->name('category');
    // Route::get('/admin/addcategory',[CategoryController::class,'create'])->name('addcategory');
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/coupon', CouponController::class);
    Route::get('admin/coupon/status/{status}/{id}',[CouponController::class,'status'])->name('coupon.status');
    Route::get('/admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        return redirect('admin');
    });
    });
