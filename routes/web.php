<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
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
    return view('start');
});
Route::get('/login',[LoginController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('login-user',[LoginController::class,'loginUser'])->name('login-user');
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/contracts',[DashboardController::class,'contracts'])->middleware('isLoggedIn');
Route::get('/settlements',[DashboardController::class,'settlements'])->middleware('isLoggedIn');

