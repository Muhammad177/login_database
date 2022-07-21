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
    return view('login.vlogin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('layouts.profile');
});
Route::post('/insert',[App\Http\Controllers\ProfileController::class,'insert']);
Route::get('/hotel', function () {
    
    return view('tempat.hotel');
});
Route::get('/homeStay', function () {
    
    return view('tempat.homeStay');
});
Route::get('/villa', function () {
    
    return view('tempat.villa');
});
Route::get('/booking', function () {
    
    return view('pemesanan.booking');
});
Route::get('/contact', function () {
    
    return view('informasi.contact');
});
Route::get('/pemesanan',[App\Http\Controllers\ProfileController::class,'pemesanan']);
Route::get('/hapus/{id}',[App\Http\Controllers\ProfileController::class,'hapus']);
Route::get('/edit/{id}',[App\Http\Controllers\ProfileController::class,'edit']);
Route::post('/update/{id}',[App\Http\Controllers\ProfileController::class,'update']);

