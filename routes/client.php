<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Customer\ClientController;

Auth::routes();
Route::group(['middleware' => ['auth', 'can:isClient']], function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get('my-invoices', 'index');


    });

});
