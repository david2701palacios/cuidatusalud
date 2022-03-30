<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Auth::routes();
Route::resource('medical-control',App\Http\Controllers\MedicalControlController::class)->middleware('auth');
Route::resource('people',App\Http\Controllers\PersonController::class)->middleware('auth');
Route::resource('users',App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('roles',App\Http\Controllers\RoleController::class)->middleware('auth');
Route::resource('lab-result',App\Http\Controllers\LabResultController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\RoleController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
