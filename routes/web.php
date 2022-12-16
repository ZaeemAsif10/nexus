<?php

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Website\WebController;
use App\Http\Controllers\Admin\StockController;


Auth::routes(['verify' => true]);

//Logout Routes
Route::controller(LoginController::class)->group(function () {
    Route::get('/logout', 'logout');
});

//Website Routes
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/about', 'About')->name('about');
    Route::get('/blogs', 'Blogs')->name('blogs');

    //Send Mail Contact
    Route::get('/contact', 'Contact')->name('contact');
    Route::post('/contact-mail', 'ContactMail');
    //projects
    Route::get('/projects/{id}', 'Projects');
});


Route::group(['middleware' => ['auth']], function () {

    //Home Controller Routes
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/admin', 'index')->name('admin');
    });

});
