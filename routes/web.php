<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CarController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHome;
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

Route::get('index', [HomeController::class, 'index'])->name('index');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Admin Panel Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHome::class, 'index'])->name('index');
    //Admin Panel Category Routes
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //Admin Panel Car Routes
    Route::prefix('/car')->name('car.')->controller(CarController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //Admin Panel Image Routes
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
});
