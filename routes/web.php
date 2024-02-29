<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function(){
    return view('adminpage');
})->middleware(['auth','admin']);

Route::get('/user', function(){
    return view('userpage');
})->middleware(['auth']);

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);


    Route::get('/categories',[App\Http\Controllers\Admin\CategoryController::class, 'index']);

    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'store']);

});


