<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationRequestController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CertificatesPageController;
use App\Http\Controllers\EmailController;


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


Route::resource('application-requests', ApplicationRequestController::class);
Route::resource('applicants', ApplicantController::class);
Route::resource('certificates-pages', CertificatesPageController::class);
Route::resource('email', EmailController::class);

Route::get('/RequestCertificate', [ApplicationRequestController::class, 'index'])->name('ApplicationRequestView');
