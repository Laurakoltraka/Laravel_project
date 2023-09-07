<?php

use App\Http\Controllers\Admin\CategryController;
use App\Models\Categori;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category' , [App\Http\Controllers\Admin\CategryController::class,'index']);
    Route::get('add-category' , [App\Http\Controllers\Admin\CategryController::class,'create']);
    Route::post('add-category' , [App\Http\Controllers\Admin\CategryController::class,'store']);
    Route::get('edit-category/{category_id}' , [App\Http\Controllers\Admin\CategryController::class,'edit']);
    Route::put('update-category/{category_id}' ,[App\Http\Controllers\Admin\CategryController::class,'update']);

    
});