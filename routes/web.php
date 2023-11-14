<?php

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(VacancyController::class)->name('vacancies.')->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(ResumeController::class)->name('resumes.')->group(function () {
    Route::post('resumes/store', 'store')->name('store');
});
