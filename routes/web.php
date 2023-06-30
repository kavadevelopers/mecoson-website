<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CMSController;
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

Route::get('test', [HomeController::class,'test']);

Route::prefix('contact-us')->group(function(){
    Route::get('', [HomeController::class,'contact']);
    Route::post('', [HomeController::class,'contactSave']);
});

Route::prefix('business-enquiry')->group(function(){
    Route::get('', [HomeController::class,'business']);
    Route::post('', [HomeController::class,'businessSave']);
});

Route::get('about-us', [HomeController::class,'about']);
Route::get('mission-vision-values', [HomeController::class,'missionVisonValues']);
Route::get('quality-policy', [HomeController::class,'qualityPolicy']);
Route::get('global-presence', [HomeController::class,'globalPresence']);

Route::get('category/{slug}', [HomeController::class,'category']);

Route::get('products', [HomeController::class,'products']);
Route::get('product/{slug}', [HomeController::class,'product']);
Route::post('product-enquiry', [HomeController::class,'enquiry']);

Route::get('downloads', [HomeController::class,'downloads']);
Route::get('career', [HomeController::class,'career']);
Route::get('current-jobs', [HomeController::class,'currentJobs']);

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

        Route::prefix('cms')->group(function(){
            Route::prefix('home-sliders')->group(function(){
                Route::get('', [CMSController::class,'homeSlidersList']);
                Route::get('{id}', [CMSController::class,'homeSlidersDelete']);
                Route::post('', [CMSController::class,'homeSlidersSave']);
            });

            Route::prefix('categories')->group(function(){
                Route::get('', [CMSController::class,'categoriesList']);
                Route::get('{id}', [CMSController::class,'categoriesDelete']);
                Route::get('edit/{id}', [CMSController::class,'categoriesEdit']);
                Route::post('save', [CMSController::class,'categoriesSave']);
                Route::post('update', [CMSController::class,'categoriesUpdate']);
            });

            Route::prefix('current-jobs')->group(function(){
                Route::get('', [CMSController::class,'currentJobs']);
                Route::post('save', [CMSController::class,'currentSave']);
            });

            Route::prefix('files')->group(function(){
                Route::get('', [CMSController::class,'filesList']);
                Route::get('{id}', [CMSController::class,'filesDelete']);
                Route::post('save', [CMSController::class,'filesSave']);
            });
        });

        Route::prefix('settings')->group(function(){
            Route::get('', [SettingController::class,'index']);
            Route::post('', [SettingController::class,'save']);
        });

        Route::get('logout', [AuthController::class,'logout']);
    });
});