<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepatientRequest;
use App\Http\Requests\UpdatepatientRequest;
use App\Models\patient;

class PatientController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorepatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepatientRequest $request, patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(patient $patient)
    {
        //
    }
}
