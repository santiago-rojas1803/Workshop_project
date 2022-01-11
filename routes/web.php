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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('verified');
    Route::view('profile', 'profile')->name('profile');
    Route::view('users', 'users.edit')->name('users');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('users', [UserController::class, 'update'])->name('users.update');

    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
