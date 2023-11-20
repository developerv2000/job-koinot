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

// Dashboard Routes
Route::redirect('/dashboard', '/dashboard/resumes')->middleware('auth');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::controller(ResumeController::class)->prefix('/resumes')->name('resumes.')->group(function () {
        Route::get('/', 'dashboardIndex')->name('dashboard.index');
        Route::get('/applicants', 'dashboardApplicants')->name('dashboard.applicants');

        Route::post('/download/{resume}', 'download')->name('download');
        Route::post('/destroy', 'destroy')->name('destroy');
    });

    Route::controller(VacancyController::class)->prefix('/vacancies')->name('vacancies.')->group(function () {
        Route::get('/', 'dashboardIndex')->name('dashboard.index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{item}', 'edit')->name('edit');

        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::post('/destroy', 'destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';
