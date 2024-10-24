<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDentalRequest;
use App\Http\Requests\UpdateDentalRequest;
use App\Models\Dental;

class DentalController extends Controller
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
    public function store(StoreDentalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dental $dental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dental $dental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDentalRequest $request, Dental $dental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dental $dental)
    {
        //
    }
}
