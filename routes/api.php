<?php

use Illuminate\Support\Facades\Route;

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('check', [App\Http\Controllers\AuthController::class, 'check']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('mix/salary_form_data', [App\Http\Controllers\Api\MixDataController::class, 'salaryFormData']);
    Route::post('salary', [App\Http\Controllers\Api\SalaryController::class, 'index']);
    Route::post('salary/create', [App\Http\Controllers\Api\SalaryController::class, 'create']);
    Route::post('salary/update', [App\Http\Controllers\Api\SalaryController::class, 'update']);
    Route::post('salary/delete', [App\Http\Controllers\Api\SalaryController::class, 'delete']);
    Route::post('salary/import', [App\Http\Controllers\Api\SalaryController::class, 'import']);

    Route::group(['prefix' => 'import'], function () {
        Route::post('salary', [App\Http\Controllers\Api\ImportController::class, 'salary']);
    });
});
