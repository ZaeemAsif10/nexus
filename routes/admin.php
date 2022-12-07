<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DetailSliderController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    //Projects Controller Routes
    Route::controller(ProjectController::class)->group(function () {

        Route::get('/projects', 'index')->name('projects');
        Route::get('/create-projects', 'createProjects');
        Route::post('/store-projects', 'storeProjects');
        Route::get('/edit-projects/{id}', 'editProjects');
        Route::post('/update-projects', 'updateProjects');

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

     //Projects Controller Routes
     Route::controller(DetailSliderController::class)->group(function () {

        Route::get('/project-detail-slider', 'index')->name('project.detail.slider');
        Route::any('/create-detail-slider', 'createProjectDetailSlider');
        Route::get('/edit-detail-slider/{id}', 'editProjectDetailSlider');
        Route::post('/update-detail-slider', 'updateProjectDetailSlider');

     });

     Route::controller(BlogController::class)->group(function () {

        Route::get('/blog', 'index')->name('blog');
        Route::any('/create-blog', 'createBlog');

     });

});


