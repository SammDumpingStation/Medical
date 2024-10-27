<?php

use App\Livewire\DoctorDashboard;
use App\Livewire\Login;
use App\Livewire\MedicalRecord;
use App\Livewire\NurseDashboard;
use App\Livewire\PatientDashboard;
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

Route::get('/', Login::class);
Route::get('/nurse', NurseDashboard::class);
Route::get('/nurse/medical-records', MedicalRecord::class);

Route::get('/doctor', DoctorDashboard::class);
Route::get('/patient', PatientDashboard::class);
