<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalFormRequest;
use App\Http\Requests\UpdateMedicalFormRequest;
use App\Models\MedicalForm;

class MedicalFormController extends Controller
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
    public function store(StoreMedicalFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicalForm $medicalForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicalForm $medicalForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicalFormRequest $request, MedicalForm $medicalForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicalForm $medicalForm)
    {
        //
    }
}
