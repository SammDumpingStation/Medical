<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class SocialHistoryHp extends Component
{
    public $smoking;
    public $alcohol;
    public $drug;
    public $sex;
    public $packPerDay, $packInYears;
    public $alcoholType, $bottlesPerSession, $alcoholFrequency;
    public $drugType;
    public $partnerCount, $partnerType;

    public function mount()
    {
        $this->smoking = Session::get('patient_information.social_history.smoking') ?? 'No';
        $this->alcohol = Session::get('patient_information.social_history.alcohol') ?? 'No';
        $this->drug = Session::get('patient_information.social_history.drug') ?? 'No';
        $this->sex = Session::get('patient_information.social_history.sex') ?? 'No';
    }

    #[On('radioSelected')]
    public function radioSelected($name, $value)
    {
        if ($name === 'smoking') {
            $this->smoking = $value;
        }
        if ($name === 'alcohol') {
            $this->alcohol = $value;
        }
        if ($name === 'drug') {
            $this->drug = $value;
        }
        if ($name === 'sex') {
            $this->sex = $value;
        }
        if ($name === 'alcohol-type') {
            $this->alcoholType = $value;
        }
        if ($name === 'alcohol-frequency') {
            $this->alcoholFrequency = $value;
        }
        if ($name === 'partner-type') {
            $this->partnerType = $value;
        }
    }

    public function saveToSession()
    {
        // Retrieve existing data from 'patient_information'
        $patientInfo = Session::get('patient_information', []);

        // Add or update 'social_history' key with new data
        $patientInfo['social_history'] = [
            'smoking' => $this->smoking,
            'packPerDay' => $this->packPerDay,
            'packInYears' => $this->packInYears,
            'alcohol' => $this->alcohol,
            'alcoholType' => $this->alcoholType,
            'bottlesPerSession' => $this->bottlesPerSession,
            'alcoholFrequency' => $this->alcoholFrequency,
            'drug' => $this->drug,
            'drugType' => $this->drugType,
            'sex' => $this->sex,
            'partnerCount' => $this->partnerCount,
            'partnerType' => $this->partnerType,
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
