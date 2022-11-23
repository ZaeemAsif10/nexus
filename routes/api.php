<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\LeadsController;
use App\Http\Controllers\Employee\EmployeeController;

use App\Http\Controllers\Api\CallRecordingController;





Route::any('api-login',[UserController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {});




