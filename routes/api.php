<?php

use App\Http\Controllers\Api\Admin\DashboardContoller;
use Illuminate\Support\Facades\Route;


//route login
Route::post('/login', [App\Http\Controllers\Api\Auth\LoginController::class, 'index']);

//group route with middleware "auth"
Route::group(['middleware' => 'auth:api'], function () {

    //logout
    Route::post('/logout', [App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
});

//group route with prefix "admin"
// Route::prefix('admin')->group(function () {
//     Route::group(['middleware' => 'auth:api'], function () {
//         Route::get('/dashboard', DashboardContoller::class);
//     });
// });
