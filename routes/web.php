<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'auth.login')->name('login');
Route::get('/', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');


Route::view('/staff', 'staff.dashboard')->middleware('is_staff');
Route::view('/patient', 'patient.dashboard')->middleware('is_patient');

Route::view('/consultations', 'staff.consultations')->middleware('is_staff');
Route::view('/consultations/vital-form', 'staff.vital-form')->middleware('is_staff');
Route::view('/health-profile', 'staff.health-profile')->middleware('is_staff');
Route::view('/prescriptions', 'staff.prescriptions')->middleware('is_staff');
Route::view('/dental-records', 'staff.dental-records')->middleware('is_staff');
Route::view('/pharmacy', 'staff.pharmacy')->middleware('is_staff');
Route::view('/statistics', 'staff.statistics')->middleware('is_staff');
Route::view('/inventory', 'staff.inventory')->middleware('is_staff');
