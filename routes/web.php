<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', [HomeController::class,'home']);
Route::get('home', [HomeController::class,'home']);

Route::prefix('contact-us')->group(function(){
    Route::get('', [HomeController::class,'contact']);
    Route::post('', [HomeController::class,'contactSave']);
});

Route::get('about-us', [HomeController::class,'about']);

Route::get('product/{slug}', [HomeController::class,'product']);
Route::post('product-enquiry', [HomeController::class,'enquiry']);


Route::prefix('admin')->group(function(){
    Route::group(['middleware' => ['isGuest']],function(){
        Route::get('', [AuthController::class,'login']);
        Route::get('login', [AuthController::class,'login']);
        Route::post('login', [AuthController::class,'loginPost']);
    });    

    Route::group(['middleware' => ['isAdmin']],function(){
        Route::get('dashboard', [DashboardController::class,'index']);
        Route::get('profile', [DashboardController::class,'profile']);
        
        Route::prefix('profile')->group(function(){
            Route::get('', [DashboardController::class,'profile']);
            Route::post('', [DashboardController::class,'saveProfile']);
        });

        Route::prefix('enquiries')->group(function(){
            Route::prefix('contact')->group(function(){
                Route::get('', [DashboardController::class,'contact']);
                Route::get('/{id}', [DashboardController::class,'contactDelete']);
            });
            Route::prefix('product')->group(function(){
                Route::get('', [DashboardController::class,'product']);
                Route::get('/{id}', [DashboardController::class,'productDelete']);
            });
        });

        Route::prefix('products')->group(function(){
            Route::get('', [ProductController::class,'index']);
            
            Route::get('create', [ProductController::class,'create']);
            Route::post('create', [ProductController::class,'save']);

            Route::get('update/{id}', [ProductController::class,'edit']);
            Route::post('update', [ProductController::class,'update']);

            Route::get('delete/{id}', [ProductController::class,'delete']);
        });

        Route::prefix('settings')->group(function(){
            Route::get('', [SettingController::class,'index']);
            Route::post('', [SettingController::class,'save']);
        });

        Route::get('logout', [AuthController::class,'logout']);
    });
});