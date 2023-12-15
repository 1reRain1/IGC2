<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationRequestController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CertificatesPageController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;


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
Route::get('/Home', [HomeController::class, 'index'])->name('HomeView');
Route::post('/RequestCertificate', [ApplicationRequestController::class, 'store'])->name('RequestStore');
