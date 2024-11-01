<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.dashboard');
});
Route::get('/consultations', function () {
    return view('staff.consultations');
});
Route::get('/health-profile', function () {
    return view('staff.health-profile');
});
Route::get('/prescriptions', function () {
    return view('staff.prescriptions');
});

Route::get('/dental-records', function () {
    return view('staff.dental-records');
});

Route::get('/pharmacy', function () {
    return view('staff.pharmacy');
});
Route::get('/statistics', function () {
    return view('staff.statistics');
});
Route::get('/inventory', function () {
    return view('staff.inventory');
});
