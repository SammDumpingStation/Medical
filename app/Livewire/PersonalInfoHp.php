<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\PatientDetails;
use Illuminate\Support\Facades\Log;

class PersonalInfoHp extends Component
{
    public $activeTab = 'profile';

    public $patientID;
    public $full_name;
    public $age;
    public $gender;
    public $birthday;
    public $address;
    public $municipal;
    public $religion;
    public $occupation;
    public $phone_number;
    public $civil_status;

    public $emergency_contact_name;
    public $emergency_contact_address;
    public $emergency_contact_phone;
    public $emergency_contact_relationship;

    public $willing_to_donate_blood = false;
    public $person_with_disability = false;

    public $specifics;
    public $registered;

    public function updated($propertyName)
     {
         $this->saveToSession();
     }


    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]);
        // Log the incoming data
    //      Log::info('Saving to database', [
    //     'emergencyContact' => $emergencyContact,
    //     'additionalQuestions' => $additionalQuestions,
    //     'disabilitySpecifics' => $disabilitySpecifics,
    //     'patientID' => $this->patientID,
    // ]);
    }

    public function saveToSession()
    {
        $formData = [
            'personal_information' => [
                'patient_id' => $this->patientID,
                'full_name' => $this->full_name,
                'age' => $this->age,
                'gender' => $this->gender,
                'birthday' => $this->birthday,
                'address' => $this->address,
                'municipal' => $this->municipal,
                'religion' => $this->religion,
                'occupation' => $this->occupation,
                'phone_number' => $this->phone_number,
                'civil_status' => $this->civil_status,
            ],
            'emergency_contact' => [
                'name' => $this->emergency_contact_name,
                'address' => $this->emergency_contact_address,
                'phone' => $this->emergency_contact_phone,
                'relationship' => $this->emergency_contact_relationship,
            ],
            'additional_questions' => [
                'willing_to_donate_blood' => $this->willing_to_donate_blood,
                'person_with_disability' => $this->person_with_disability,
            ],
            'disability_specifics' => [
                'specifics' => $this->specifics,
                'registered' => $this->registered,
            ],
        ];

        Session::put(['patient_information' => $formData]);

        $this->saveToDatabase($formData['emergency_contact'], $formData['additional_questions'], $formData['disability_specifics']);
         // Flash a success message
         session()->flash('message', 'Saved Successfully!.');
    }

    public function saveToDatabase($emergencyContact, $additionalQuestions, $disabilitySpecifics)
    {
        Log::info('Saving to database', [
            'emergencyContact' => $emergencyContact,
            'additionalQuestions' => $additionalQuestions,
            'disabilitySpecifics' => $disabilitySpecifics,
            'patientID' => $this->patientID,
        ]);

        $personWithDisability = (bool) $additionalQuestions['person_with_disability'];
        $willingToDonateBlood = (bool) $additionalQuestions['willing_to_donate_blood'];
        $reg = (bool) $disabilitySpecifics['registered'];

       $result = $personWithDisability ? "True" : "False";
        $resultDonate = $willingToDonateBlood ? "True" : "False";
        $regResult = $reg ? "Yes" : "No";

         Log::info('Converted values', [
            'person_with_disability' => $result,
            'willing_to_donate_blood' => $resultDonate,
            'registered' => $regResult,
        ]);

        $patientDetails = PatientDetails::where('patient_id', $this->patientID)->first();

        if ($patientDetails) {
            Log::info('Updating existing PatientDetails', ['patient_id' => $this->patientID]);

            $patientDetails->update([
                'emergency_contact_name' => $emergencyContact['name'],
                'emergency_contact_address' => $emergencyContact['address'],
                'emergency_contact_phone' => $emergencyContact['phone'],
                'emergency_contact_relationship' => $emergencyContact['relationship'],
                'willing_to_donate_blood' => $resultDonate,
                'person_with_disability' => $result,
                'specifics' => $disabilitySpecifics['specifics'],
                'registered' => $regResult,
            ]);

            Log::info('PatientDetails updated successfully', ['patient_id' => $this->patientID]);
        } else {
             Log::info('Creating new PatientDetails', ['patient_id' => $this->patientID]);

            PatientDetails::create([
                'patient_id' => $this->patientID,
                'emergency_contact_name' => $emergencyContact['name'],
                'emergency_contact_address' => $emergencyContact['address'],
                'emergency_contact_phone' => $emergencyContact['phone'],
                'emergency_contact_relationship' => $emergencyContact['relationship'],
                'willing_to_donate_blood' => $resultDonate,
                'person_with_disability' => $result,
                'specifics' => $disabilitySpecifics['specifics'],
                'registered' =>  $regResult,
            ]);

             Log::info('PatientDetails created successfully', ['patient_id' => $this->patientID]);
        }
    }



    public function mount($patient)
{
    $this->patientID = $patient->patient_id;
    $this->full_name = $patient->full_name;
    $this->age = $patient->age;
    $this->gender = $patient->gender;
    $this->birthday = $patient->birthday;
    $this->address = $patient->address;
    $this->municipal = $patient->municipal;
    $this->religion = $patient->religion;
    $this->occupation = $patient->occupation;
    $this->phone_number = $patient->phone_number;
    $this->civil_status = $patient->civil_status;

    $this->patientDetails = PatientDetails::where('patient_id', $this->patientID)->first();

    Log::info('Patient ID PersonalINfo:', ['patient_id' => $this->patientDetails]);


        if ($this->patientDetails) {
            Session::put('patient_information.personal_information.patient_id', $this->patientDetails->patient_id);
        }

    $patientDetails = PatientDetails::where('patient_id', $this->patientID)->first();

    if ($patientDetails) {
        $this->emergency_contact_name = $patientDetails->emergency_contact_name ?? '';
        $this->emergency_contact_address = $patientDetails->emergency_contact_address ?? '';
        $this->emergency_contact_phone = $patientDetails->emergency_contact_phone ?? '';
        $this->emergency_contact_relationship = $patientDetails->emergency_contact_relationship ?? '';

        $this->willing_to_donate_blood = $patientDetails->willing_to_donate_blood === 'True';
        $this->person_with_disability = $patientDetails->person_with_disability === 'True';
        $this->specifics = $patientDetails->specifics ?? '';
        $this->registered = $patientDetails->registered === 'True';
    } else {
        $this->emergency_contact_name = '';
        $this->emergency_contact_address = '';
        $this->emergency_contact_phone = '';
        $this->emergency_contact_relationship = '';
        $this->willing_to_donate_blood = false;
        $this->person_with_disability = false;
        $this->specifics = '';
        $this->registered = false;
    }
}



public function render()
{
    return view('livewire.staff.hp-form-section.personal-info-hp');

}
}
