<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class MedicalHistoryHp extends Component
{
    // Personal medical conditions
    public $allergy = false;
    public $asthma = false;
    public $coronaryArteryDisease = false;
    public $pepticUlcer = false;
    public $hypertension = false;
    public $skinDisorder = false;
    public $hepatitis = false;
    public $cancer = false;
    public $thyroidDisease = false;
    public $pcos = false;
    public $epilepsy = false;
    public $tuberculosis = false;
    public $psychologicalDisorder = false;

    // Family medical history
    public $motherConditions = [];
    public $fatherConditions = [];

    // Recent hospital admission
    public $admissions = [];

    protected $rules = [
        'motherConditions' => 'nullable|string',
        'fatherConditions' => 'nullable|string',
        'diagnosis' => 'nullable|string',
        'admissionDate' => 'nullable|date',
    ];

    // Mapping array
    protected $titleMapping = [
        'Allergy' => 'allergy',
        'Asthma' => 'asthma',
        'Cancer' => 'cancer',
        'Coronary Artery Disease' => 'coronaryArteryDisease',
        'Thyroid Disease' => 'thyroidDisease',
        'Peptic Ulcer' => 'pepticUlcer',
        'PCOS' => 'pcos',
        'Hypertension' => 'hypertension',
        'Epilepsy' => 'epilepsy',
        'Skin Disorder' => 'skinDisorder',
        'Tuberculosis' => 'tuberculosis',
        'Hepatitis' => 'hepatitis',
        'Psychological Disorder' => 'psychologicalDisorder',
    ];

    #[On('toggle-data')]
    public function toggle($title, $state)
    {
        // Check if the title exists in the mapping
        if (array_key_exists($title, $this->titleMapping)) {
            $variable = $this->titleMapping[$title];
            $this->$variable = $state;
        }
    }

    #[On('family-condition-data')]
    public function familyCondition($motherCondition, $fatherCondition)
    {
        $this->motherConditions = $motherCondition;
        $this->fatherConditions = $fatherCondition;
    }

    #[On('recent-admission-data')]
    public function recentAdmission($admissions)
    {
        $this->admissions = $admissions;
    }

    public function mount()
    {
        // Fix the syntax for Session::get with default values
        $patientInfo = Session::get('patient_information.medical_history', []);

        $this->allergy = $patientInfo['allergy'] ?? false;
        $this->asthma = $patientInfo['asthma'] ?? false;
        $this->coronaryArteryDisease = $patientInfo['coronaryArteryDisease'] ?? false;
        $this->pepticUlcer = $patientInfo['pepticUlcer'] ?? false;
        $this->hypertension = $patientInfo['hypertension'] ?? false;
        $this->skinDisorder = $patientInfo['skinDisorder'] ?? false;
        $this->hepatitis = $patientInfo['hepatitis'] ?? false;
        $this->cancer = $patientInfo['cancer'] ?? false;
        $this->thyroidDisease = $patientInfo['thyroidDisease'] ?? false;
        $this->pcos = $patientInfo['pcos'] ?? false;
        $this->epilepsy = $patientInfo['epilepsy'] ?? false;
        $this->tuberculosis = $patientInfo['tuberculosis'] ?? false;
        $this->psychologicalDisorder = $patientInfo['psychologicalDisorder'] ?? false;
        $this->motherConditions = $patientInfo['motherConditions'] ?? [];
        $this->fatherConditions = $patientInfo['fatherConditions'] ?? [];
        $this->admissions = $patientInfo['admissions'] ?? [];
    }

    public function saveToSession()
    {
        $patientInfo = Session::get('patient_information', []);

        $patientInfo['medical_history'] = [
            'allergy' => $this->allergy,
            'asthma' => $this->asthma,
            'coronaryArteryDisease' => $this->coronaryArteryDisease,
            'thyroidDisease' => $this->thyroidDisease,
            'pepticUlcer' => $this->pepticUlcer,
            'hypertension' => $this->hypertension,
            'skinDisorder' => $this->skinDisorder,
            'hepatitis' => $this->hepatitis,
            'cancer' => $this->cancer,
            'pcos' => $this->pcos,
            'epilepsy' => $this->epilepsy,
            'tuberculosis' => $this->tuberculosis,
            'psychologicalDisorder' => $this->psychologicalDisorder,
            'motherConditions' => $this->motherConditions,
            'fatherConditions' => $this->fatherConditions,
            'admissions' => $this->admissions,
        ];

        Session::put('patient_information', $patientInfo);
        Session::save(); // Force save the session

        // Add debug logging
        logger('Session saved:', ['data' => $patientInfo]);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.medical-history-hp');
    }
}
