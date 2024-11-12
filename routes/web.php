<?php

use App\Http\Controllers\Consultations;
use App\Http\Controllers\HealthProfile;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'auth.login')->name('login');
Route::get('/', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::view('/staff', 'staff.dashboard')->middleware('is_staff');

//Consultations Section
Route::get('/consultations', [Consultations::class, 'index'])->middleware('is_staff');
Route::get('/consultations/select-type', [Consultations::class, 'selectType'])->middleware('is_staff');
//Student Part
Route::get('/consultation/student', [Consultations::class, 'studentIndex'])->middleware('is_staff');
Route::get('/consultation/student/{id}/create-form', [Consultations::class, 'createStudent'])->middleware('is_staff');
//Teaching/Non-Teaching
Route::get('/consultation/teaching', [Consultations::class, 'teachingIndex'])->middleware('is_staff');
Route::get('/consultation/teaching/create-form', [Consultations::class, 'createTeaching'])->middleware('is_staff');

//Health Profile Section
Route::get('/health-profile', [HealthProfile::class, 'index'])->middleware('is_staff');
Route::get('/health-profile/create-form-1/{id}', [HealthProfile::class, 'showForm1'])->middleware('is_staff');
Route::get('/health-profile/create-form-2/{id}', [HealthProfile::class, 'showForm2'])->middleware('is_staff');
Route::get('/health-profile/create-form/{id}/summary', [HealthProfile::class, 'profileSummary'])->middleware('is_staff');

Route::get('/health-profile/create-form-3/{id}', [HealthProfile::class, 'showForm3'])->middleware('is_staff');

Route::view('/prescriptions', 'staff.prescriptions')->middleware('is_staff');
Route::view('/dental-records', 'staff.dental-records')->middleware('is_staff');
Route::view('/pharmacy', 'staff.pharmacy')->middleware('is_staff');
Route::view('/statistics', 'staff.statistics')->middleware('is_staff');
Route::view('/inventory', 'staff.inventory')->middleware('is_staff');

//Patient Section
Route::view('/patient', 'patient.dashboard')->middleware('is_patient');
