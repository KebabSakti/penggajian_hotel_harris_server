<?php

use Illuminate\Support\Facades\Route;

Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::get('check', [App\Http\Controllers\Api\AuthController::class, 'check']);
Route::get('logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('mix/salary_form_data', [App\Http\Controllers\Api\MixDataController::class, 'salaryFormData']);
    Route::post('salary', [App\Http\Controllers\Api\SalaryController::class, 'index']);
    Route::post('salary/create', [App\Http\Controllers\Api\SalaryController::class, 'create']);
    Route::post('salary/update', [App\Http\Controllers\Api\SalaryController::class, 'update']);
    Route::post('salary/delete', [App\Http\Controllers\Api\SalaryController::class, 'delete']);

    Route::group(['prefix' => 'import'], function () {
        Route::post('salary', [App\Http\Controllers\Api\ImportController::class, 'salary']);
    });

    Route::group(['prefix' => 'mail'], function () {
        Route::post('salary', [App\Http\Controllers\Api\MailController::class, 'salary']);
    });
});
