<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
/**Profile controllers */
Route::get('profile',[ProfileController::class, 'index'] )->name('profile');
Route::post('profile/update', [ProfileController::class,'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class,'updatePassword'])->name('password.update');
/**Sliders controllers */
Route::resource('/slider', SliderController::class);
/**category controller */
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status')
Route::resource('/category', CategoryController::class);

