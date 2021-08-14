<?php

use App\Mail\SalarySlipMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//PUBLIC ROUTE
Route::get('/', function () {
    return redirect('login');
});

//ERROR 403
Route::get('unauthorized', function () {
    return view('unauthorized');
});

//LOGIN 
Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'loginAction']);

Route::group(['prefix' => 'private'], function () {
    //admin landing page
    Route::get('home', function () {
        return view('private.index');
    })->middleware('auth');

    Route::post('salary/ajax', [\App\Http\Controllers\SalaryController::class, 'ajax']);
    Route::resource('salary', App\Http\Controllers\SalaryController::class);

    //LOGOUT
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::get('export/employee', [\App\Http\Controllers\ExportController::class, 'employee'])->name('export.employee');
Route::get('export/salary/{type}/start/{start}/end/{end}', [\App\Http\Controllers\ExportController::class, 'salary'])->name('export.salary');
Route::get('export/salary/skeleton', [\App\Http\Controllers\ExportController::class, 'salary_skeleton'])->name('export.salary_skeleton');


//mail route
Route::get('mail', [\App\Http\Controllers\MailController::class, 'mail']);
