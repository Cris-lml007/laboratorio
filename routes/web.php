<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->controller(DashboardController::class)->middleware('auth')->group(function(){
    Route::get('users','users')->name('dashboard.users');
    Route::get('/Laboratories','Laboratories')->name('dashboard.Laboratories');
});
