<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PersonalInfoHp extends Component
{
    public $activeTab = 'profile';
    // Personal Information
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

    // Emergency Contact
    public $emergency_contact_name;
    public $emergency_contact_address;
    public $emergency_contact_phone;
    public $emergency_contact_relationship;

    // Additional Questions
    public $willing_to_donate_blood = false;
    public $person_with_disability = false;

    //Specify Disability
    public $specifics;
    public $registered;

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
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
        $this->emergency_contact_name = Session::get('patient_information.emergency_contact.name') ?? '';
        $this->emergency_contact_address = Session::get('patient_information.emergency_contact.address') ?? '';
        $this->emergency_contact_phone = Session::get('patient_information.emergency_contact.phone') ?? '';
        $this->emergency_contact_relationship = Session::get('patient_information.emergency_contact.relationship') ?? '';
        $this->willing_to_donate_blood = Session::get('patient_information.additional_questions.willing_to_donate_blood') ?? false;
        $this->person_with_disability = Session::get('patient_information.additional_questions.person_with_disability') ?? false;
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.personal-info-hp');
    }
}
