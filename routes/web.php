<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StudentController;

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

//Authendicate
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);





Route::get('/students', [StudentController::class, 'index'])->name('students');
