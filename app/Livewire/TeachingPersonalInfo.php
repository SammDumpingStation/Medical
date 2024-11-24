<?php

namespace App\Livewire;

use App\Models\Patient;
use App\Models\PatientDetails; 
use App\Models\User; 
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash; 
class TeachingPersonalInfo extends Component
{
    public $full_name;
    public $emp_id;
    public $age;
    public $gender;
    public $birthday;
    public $address;
    public $phone;
    public $philhealth;
    public $emergency_contact_full_name;
    public $emergency_address;
    public $emergency_phone;
    public $relationship;

    public function submitForm()
    {
        Log::info('Submitting form data', [
            'full_name' => $this->full_name,
            'emp_id' => $this->emp_id,
            'age' => $this->age,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'address' => $this->address,
            'phone' => $this->phone,
            'philhealth' => $this->philhealth,
            'emergency_contact_full_name' => $this->emergency_contact_full_name,
            'emergency_address' => $this->emergency_address,
            'emergency_phone' => $this->emergency_phone,
            'relationship' => $this->relationship,
        ]);

        session(['patient_id' => $this->emp_id]); 
     

        Log::info('Form data validated successfully.');

        try {
            

            Log::info('Checking if user data exists in the database');

            $user = User::firstOrCreate(
                ['patient_id' => $this->emp_id], 
                [ 
                    'role' => 'patient',
                    'is_staff' => 1,
                    'password' => Hash::make('password'), 
                ]
            );
            
            if ($user->wasRecentlyCreated) {
                Log::info('New user created successfully', ['patient_id' => $this->emp_id]);
            } else {
                Log::info('User already exists', ['patient_id' => $this->emp_id]);
            }
            
             Log::info('Storing or updating patient data in database');

             $patient = Patient::updateOrCreate(
                ['patient_id' => $this->emp_id], 
                [
                    'full_name' => $this->full_name,
                    'age' => $this->age,
                    'gender' => $this->gender,
                    'birthday' => $this->birthday,
                    'address' => $this->address,
                    'phone_number' => $this->phone,
                    'philhealth' => $this->philhealth,
                ]
            );
            
             Log::info('Patient data stored or updated successfully', [
                'patient_id' => $patient->patient_id,
                'updated' => $patient->wasRecentlyCreated ? 'created' : 'updated',
            ]);
            

            Log::info('Storing patient details data in database');
            PatientDetails::updateOrCreate(
                ['patient_id' => $this->emp_id], 
                [ 
                'emergency_contact_name' => $this->emergency_contact_full_name,
                'emergency_contact_address' => $this->emergency_address,
                'emergency_contact_phone' => $this->emergency_phone,
                'emergency_contact_relationship' => $this->relationship,
            ]);

         
             Log::info('Patient data, details, and user data saved successfully.');

        } catch (\Exception $e) {
             Log::error('Error saving patient data: ' . $e->getMessage());
            session()->flash('error_message', 'An error occurred while saving the data.');
            return;
        }

         session()->flash('message', 'Information saved successfully!');
        Log::info('Flash message set for successful form submission');
    }

    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-personal-info');
    }
}
