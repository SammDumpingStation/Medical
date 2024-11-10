<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SocialHistoryHp extends Component
{
    public $smoking = 'No';
    public $alcohol = 'No';
    public $drug = 'No';
    public $sex = 'No';

    public function mount()
    {
        $this->smoking = Session::get('patient_information.social_history.smoking') ?? 'No';
        $this->alcohol = Session::get('patient_information.social_history.alcohol') ?? 'No';
        $this->drug = Session::get('patient_information.social_history.drug') ?? 'No';
        $this->sex = Session::get('patient_information.social_history.sex') ?? 'No';
    }

    public function saveToSession()
    {
        // Retrieve existing data from 'patient_information'
        $patientInfo = Session::get('patient_information', []);

        // Add or update 'social_history' key with new data
        $patientInfo['social_history'] = [
            'smoking' => $this->smoking,
            'alcohol' => $this->alcohol,
            'drug' => $this->drug,
            'sex' => $this->sex,
        ];

        // Save the modified array back to the session
        Session::put('patient_information', $patientInfo);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.social-history-hp');
    }
}
