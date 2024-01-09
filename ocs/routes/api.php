<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\OcsServiceController;
use App\Http\Controllers\FundCodeController;
use App\Http\Controllers\ServiceProcessorController;
use App\Http\Controllers\Auth\GoogleController;

// Routes for User Requests
Route::get('/get-user-requests', [UserRequestController::class, 'index']);
Route::get('/user-requests/{id}', [UserRequestController::class, 'show']);
Route::post('/user-requests', [UserRequestController::class, 'store']);
Route::put('/user-requests/{id}', [UserRequestController::class, 'update']);
Route::delete('/user-requests/{id}', [UserRequestController::class, 'destroy']);

// Routes for OCS Services
Route::get('/all-ocs-services', [OcsServiceController::class, 'index']);
Route::get('/ocs-services/{id}', [OcsServiceController::class, 'show']);
Route::post('/create-ocs-services', [OcsServiceController::class, 'store']);
Route::put('/update-ocs-services/{id}', [OcsServiceController::class, 'update']);
Route::delete('/delete-ocs-services/{id}', [OcsServiceController::class, 'destroy']);

// Routes for Fund_Code
Route::get('/all-fund-codes', [FundCodeController::class, 'index']);
Route::get('/fund-codes/{id}', [FundCodeController::class, 'show']);
Route::post('/create-fund-codes', [FundCodeController::class, 'store']);
Route::put('/update-fund-codes/{id}', [FundCodeController::class, 'update']);
Route::delete('/delete-fund-codes/{id}', [FundCodeController::class, 'destroy']);

// Routes for Service_Processor
 Route::get('/all-service-pro', [ServiceProcessorController::class, 'index']);
Route::get('/service-pro/{id}', [ServiceProcessorController::class, 'show']);
Route::post('/create-service-pro', [ServiceProcessorController::class, 'store']);
Route::put('/update-service-pro/{id}', [ServiceProcessorController::class, 'update']);
Route::delete('/delete-service-pr/{id}', [ServiceProcessorController::class, 'destroy']); 


Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
//Route::get('/auth/google/callback', [Auth\GoogleController::class, 'handleGoogleCallback']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('/auth/login', [GoogleController::class, 'login']);
Route::middleware('auth:sanctum')->get('/auth/user', [GoogleController::class, 'user']);
Route::middleware('auth:sanctum')->post('/auth/logout', [GoogleController::class, 'logout']);


// Route::get('/test', function () {
//     return 'This is a test route.';
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
