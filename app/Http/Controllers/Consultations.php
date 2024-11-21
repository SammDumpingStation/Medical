<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\MedicalConsultation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Consultations extends Controller
{
    public function index()
    {
        Session::forget('patient_information');
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
    }

    public function createStudent($id)
    {
        $patient = Patient::find($id);
        if (!$patient) {
            return redirect()->back()->with('error', 'Patient not found.');
        }
        return view('staff.consultations-form.student-form', compact('patient'));
    }

    public function createStudentPart2($id)
    {
        $patient = Patient::findOrFail($id);
        $part1Data = Session::get('part1_data', []);

        if (empty($part1Data)) {
            return redirect()->route('createStudent', ['id' => $id])
                             ->with('error', 'Complete Part 1 before proceeding.');
        }

        return view('staff.consultations-form.student-form-part2', compact('patient', 'part1Data'));
    }

    public function storeFormPart1(Request $request, $id)
    {
        // Validate Part 1 data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'dob_age_sex' => 'required|string|max:100',
            'course_year' => 'required|string|max:100',
            'philhealth' => 'nullable|string|max:50',
            'address' => 'required|string|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:15',
            'temperature' => 'required|numeric|min:30|max:45',
            'blood_pressure' => 'required|string|max:20',
            'pulse_rate' => 'required|integer|min:30|max:150',
            'respiratory_rate' => 'required|integer|min:10|max:50',
            'o2_saturation' => 'required|integer|min:50|max:100',
            'height' => 'required|numeric|min:30|max:300',
            'weight' => 'required|numeric|min:1|max:500',
            'bmi' => 'nullable|numeric|min:5|max:50',
            'nutritional_status' => 'nullable|string|max:255',
            'chief_complaints' => 'nullable|string|max:255',
            'medical_conditions' => 'nullable|string|max:500',
            'medications' => 'nullable|string|max:500',
            'pregnancy_status' => 'nullable|string|max:50',
            'last_menstrual_period' => 'nullable|date',
            'procedures_operations' => 'nullable|string|max:500',
            'findings_diagnosis' => 'nullable|string|max:500',
            'recommendations' => 'nullable|string|max:500',
            'medications_dispensed' => 'nullable|string|max:500',
            'physician' => 'required|string|max:255',
        ]);

        // Save data in session
        Session::put('part1_data', $validatedData);

        // Redirect to Part 2
        return redirect()->route('createStudentPart2', ['id' => $id]);
    }

    public function storePart2(Request $request, $id)
    {
        // Validate Part 2 data
        $validatedData = $request->validate([
            'family_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'sex' => 'required|string|in:Male,Female,Other',
            'civil_status' => 'required|array',
            'civil_status.*' => 'string|in:Single,Married,Widow/Widower,Separated,Child',
            'phone_address' => 'required|string|max:255',
            'vital_signs' => 'required|string|max:1000',
            'chief_complaint' => 'nullable|string|max:1000',
        ]);

        $part1Data = Session::get('part1_data', []);
        if (empty($part1Data)) {
            return redirect()->route('createStudent', ['id' => $id])
                             ->with('error', 'Complete Part 1 before proceeding.');
        }

        $completeData = array_merge($part1Data, $validatedData);

        MedicalConsultation::create(array_merge($completeData, ['patient_id' => $id]));

        Session::forget('part1_data');

        return redirect()->route('consultations.index')->with('success', 'Consultation form saved successfully.');
    }

    public function createTeaching()
    {
        dd('Hi');
    }
}
