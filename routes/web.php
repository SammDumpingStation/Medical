<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index']);
Route::get('/nurse/dashboard', [SessionController::class, 'create']);

Route::get('/nurse/dashboard/medical-records', function() {
    return view('nurse.medical-records');
});

Route::get('/nurse/dashboard/dental-records', function () {
    return view('nurse.dental-records');
});

Route::get('/nurse/dashboard/medicine-records', function () {
    return view('nurse.medicine-records');
});

Route::get('/nurse/dashboard/follow-up-checkup', function () {
    return view('nurse.follow-up-checkup');
});



