<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationRequestController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use TCG\Voyager\Facades\Voyager;



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


Route::resource('applicants', ApplicantController::class);
Route::get('/RequestCertificate', [ApplicationRequestController::class, 'index'])->name('ApplicationRequestView');
Route::get('/', [HomeController::class, 'index'])->name('HomeView');
Route::post('/RequestCertificate', [ApplicationRequestController::class, 'store'])->name('RequestStore');

Route::get('/RequestCertificate/confirm/{token}', [ApplicationRequestController::class, 'confirm'])->name('applicant.confirm');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/cvs/download/{filename}', 'CVDownloadController@show')
     ->middleware('admin.user') 
     ->name('admin.cvs.download');