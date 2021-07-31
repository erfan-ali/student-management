<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/', function () {
    return view('welcome');
});
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [AdminController::class, 'index'])->name('welcome');

Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');


Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);






