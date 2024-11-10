<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class Consultations extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff.consultations');
    }

    public function studentIndex()
    {
        return view('staff.consultations-form.student-dash');
    }
    public function teachingIndex()
    {
        return view('staff.consultations-form.teaching-form');
    }
/**
 * Selects the appropriate form
 */

    public function selectType(Request $request)
    {
        // Get the selected input value
        $selectedType = $request->input('patient-type');

        // Use $selectedType as needed, for example, redirect based on selection
        if ($selectedType === 'student') {
            return redirect('/consultation/student');
        } elseif ($selectedType === 'teaching') {
            return redirect('/consultation/teaching');
        }

        // // Or, pass the value to a view
        // return view('your-view-name', compact('selectedType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createStudent(Patient $id)
    {
        return view('staff.consultations-form.student-form', ['patient' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTeaching()
    {
        dd('Hi');
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
    public function show(string $id)
    {
        //
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
