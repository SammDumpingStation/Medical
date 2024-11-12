<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class HealthProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff.health-profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showForm1(Patient $id)
    {
        return view('staff.health-profile-form.first-health-profile', ['patient' => $id]);
    }

    public function showForm2(Patient $id)
    {
        return view('staff.health-profile-form.second-health-profile', ['patient' => $id]);
    }

    public function profileSummary()
    {
        return view('staff.health-profile-form.summary-health-profile');
    }

    public function showForm3(Patient $id)
    {
        return view('staff.health-profile-form.third-health-profile', ['patient' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
