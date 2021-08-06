<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonthlyPayController;
use App\Http\Controllers\Auth;

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
Route::get('/', function () {
    return view('layouts.master2');
});

Route::get('/welcome', [AdminController::class, 'index'])->name('welcome');
Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');

//Authendicate
Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);



Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student_create', [StudentController::class, 'student_create'])->name('student_create');
Route::post('/student_store', [StudentController::class, 'student_store'])->name('student_store');
Route::get('/student_edit/{id}', [StudentController::class, 'student_edit'])->name('student_edit');
Route::post('/student_update/{id}', [StudentController::class, 'student_update'])->name('student_update');
Route::post('/student_delete/{id}', [StudentController::class, 'student_delete'])->name('student_delete');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user_create', [UserController::class, 'user_create'])->name('user_create');
Route::post('/user_store', [UserController::class, 'user_store'])->name('user_store');
Route::get('/user_edit/{id}', [UserController::class, 'user_edit'])->name('user_edit');
Route::post('/user_update/{id}', [UserController::class, 'user_update'])->name('user_update');
Route::post('/user_delete/{id}', [UserController::class, 'user_delete'])->name('user_delete');



Route::get('/index', [Auth\LoginController::class, 'index'])->name('index');
Route::post('/user_login', [Auth\LoginController::class, 'user_login'])->name('user_login');



Route::get('/monthlyPay', [MonthlyPayController::class, 'index'])->name('monthlyPay');
Route::get('/monthlyPay_create', [MonthlyPayController::class, 'monthlyPay_create'])->name('monthlyPay_create');
Route::post('/monthlyPay_store', [MonthlyPayController::class, 'monthlyPay_store'])->name('monthlyPay_store');
Route::get('/monthlyPay_edit/{id}', [MonthlyPayController::class, 'monthlyPay_edit'])->name('monthlyPay_edit');
Route::post('/monthlyPay_update/{id}', [MonthlyPayController::class, 'monthlyPay_update'])->name('monthlyPay_update');
Route::post('/monthlyPay_delete/{id}', [MonthlyPayController::class, 'monthlyPay_delete'])->name('monthlyPay_delete');


