<?php

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


Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/user_login', [App\Http\Controllers\UserController::class, 'user_login']);
Route::get('/register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('/save_register', [App\Http\Controllers\UserController::class, 'save_register'])->name('save_user');


Route::post('save_task', [App\Http\Controllers\TaskController::class, 'save_task']);
Route::any('json_code', [App\Http\Controllers\TaskController::class, 'json_code']);

Route::group(['middleware' => 'auth.user'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

Route::get('login' , function(){


    return view('pages.login');
})->name('login');
