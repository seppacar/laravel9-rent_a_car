<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPanel as Admin;

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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

//Front Page Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/vehicle/{id}', [HomeController::class, 'car'])->name('car_single');
Route::get('/vehicles', [HomeController::class, 'carAll'])->name('car_all');
Route::get('/vehicles/{category_id}', [HomeController::class, 'getCars'])->name('car_multiple');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
//userlogin register
Route::view('/userlogin', 'home.login')->name('userlogin');
Route::view('/userregister', 'home.register')->name('userregister');
Route::get('/userlogout', [HomeController::class, 'logout'])->name('userlogout');
//admin panel login
Route::view('/adminlogin', 'admin.login')->name('admin.login');
Route::post('/adminauth', [HomeController::class, 'adminauth'])->name('admin.auth');

//Admin Panel Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [Admin\HomeController::class, 'index'])->name('index');
    //Admin Panel setting route
    Route::get('/setting', [Admin\HomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [Admin\HomeController::class, 'settingUpdate'])->name('setting.update');

    //Admin Panel Category Routes
    Route::prefix('/category')->name('category.')->controller(Admin\CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //Admin Panel Car Routes
    Route::prefix('/car')->name('car.')->controller(Admin\CarController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //Admin Panel Image Routes
    Route::prefix('/image')->name('image.')->controller(Admin\ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    //Admin Panel Message Routes
    Route::prefix('/message')->name('message.')->controller(Admin\MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    //Admin FAQ Routes
    Route::prefix('/faq')->name('faq.')->controller(Admin\FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    //Admin Panel Comment Routes
    Route::prefix('/comment')->name('comment.')->controller(Admin\CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    //Admin User Comment Routes
    Route::prefix('/user')->name('user.')->controller(Admin\AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });

    //Admin Reservation Routes
    Route::prefix('/reservation')->name('reservation.')->controller(Admin\ReservationController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//USER AUTH CONTROL
Route::middleware('auth')->group(function(){
    //********** USER ROUTES ********************
    Route::prefix('userpanel')->prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('profile');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviews/destroy/{id}', 'destroyReview')->name('reviews.destroy');
        Route::get('/reservations', 'reservations')->name('reservations');
        Route::get('/reservations/destroy/{id}', 'destroyReservation')->name('reservation.destroy');

    });
    //Reservation Routes
    Route::prefix('reservation')->prefix('reservation')->name('reservation.')->controller(ReservationController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create/{id}', 'create')->name('create');
        Route::post('/make', 'makeReservation')->name('make');
        Route::get('/checkout/{res_id}', 'checkout')->name('checkout');
        Route::post('/checkout/process', 'processCheckout')->name('checkout.process');

    });
});
