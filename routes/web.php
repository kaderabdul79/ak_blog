<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/', function(){
    return view('website.home');
});

Route::get('/about', function(){
    return view('website.about');
});

Route::get('/category', function(){
    return view('website.category');
});

Route::get('/contact', function(){
    return view('website.contact');
});

Route::get('/post', function(){
    return view('website.post');
});


// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function(){
        return view('admin.dashboard.index');
    });
    Route::resource('category', CategoryController::class);
    
});  