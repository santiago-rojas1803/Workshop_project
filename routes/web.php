<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
Route::get('/admin', function () {
    return view('admin');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('verified');
    Route::view('profile', 'profile')->name('profile');
    Route::view('users', 'users.edit')->name('users');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('users', [UserController::class, 'update'])->name('users.update');

    Route::resource('users', 'UserController')->names('users');
    Route::resource('categories', 'CategoryController')->names('categories');
    Route::resource('clients', 'ClientController')->names('clients');
    Route::resource('products', 'ProductController')->names('products');
    Route::resource('providers', 'ProviderController')->names('providers');
    Route::resource('purchases', 'PurchaseController')->names('purchases');
    Route::resource('sales', 'SaleController')->names('sales');
});

require __DIR__.'/auth.php';
