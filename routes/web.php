<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'export'], function () {
    Route::get('salary/{type}/start/{start}/end/{end}', [\App\Http\Controllers\ExportController::class, 'salary']);
    Route::get('salary/skeleton', [\App\Http\Controllers\ExportController::class, 'salary_skeleton']);
    Route::get('salary/pdf/{id}', [\App\Http\Controllers\ExportController::class, 'salary_pdf']);
});
