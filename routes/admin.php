<?php

use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    //Projects Controller Routes
    Route::controller(ProjectController::class)->group(function () {

        Route::get('/create-projects', 'createProjects')->name('create.projects');
        Route::post('/store-projects', 'storeProjects');

        Route::get('/home-slider', 'homeSlider')->name('home.slider');
        Route::get('/get-slider', 'getSlider');
        Route::get('/create-home-slider', 'createHomeSlider');
        Route::post('/store-home-slider', 'storeHomeSlider');
        Route::get('/edit-home-slider', 'editHomeSlider');
        Route::post('/update-home-slider', 'updateHomeSlider');
        Route::get('/delete-home-slider', 'deleteHomeSlider');
    });

    Route::controller(FeatureController::class)->group(function () {
        Route::get('/features', 'index')->name('features');
        Route::get('/get-feature', 'getFeature');
        Route::get('/create/feature', 'createFeature');
        Route::post('/store-feature', 'storeFeature');
        Route::get('/edit-feature/{id}', 'editFeature');
        Route::post('/update-feature', 'updateFeature');
    });

});


