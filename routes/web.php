<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->controller(DashboardController::class)->middleware('auth')->group(function(){
    Route::get('/laboratories','laboratory')->name('dashboard.laboratories');
    Route::get('/laboratories/{laboratory}','assetLaboratory')->name('dashboard.laboratory');
    Route::get('/maintenance','maintenance')->name('dashboard.maintenance');

    Route::prefix('/administration')->group(function(){
        Route::get('users','users')->name('administration.users');
        Route::get('/laboratories','Laboratories')->name('administration.laboratories');
        Route::get('/actives','actives')->name('administration.actives');
    });
});
