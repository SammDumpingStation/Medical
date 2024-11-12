<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class MedicalHistoryHp extends Component
{
    // Personal medical conditions
    public $allergy;
    public $foodAllergy, $foodDetails;
    public $drugAllergy, $drugDetails;
    public $asthma;
    public $coronaryArteryDisease;
    public $pepticUlcer;
    public $hypertension, $hypertensionDetails;
    public $skinDisorder, $skinDisorderDetails;
    public $hepatitis, $hepatitisDetails;
    public $cancer, $cancerDetails;
    public $thyroidDisease;
    public $pcos;
    public $epilepsy, $epilepsyDetails;
    public $tuberculosis, $tuberculosisDetails;
    public $psychologicalDisorder, $psychologicalDisorderDetails;

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

    #[On('toggle-data')]
    public function toggle($title)
    {
        // // Check if the title exists in the mapping
        // if (array_key_exists($title, $this->titleMapping)) {
        //     $variable = $this->titleMapping[$title];
        //     $this->$variable = $state;
        // }
        if ($title === 'Allergy') {
            $this->allergy = !$this->allergy;
        }
        if ($title === 'Food') {
            $this->foodAllergy = !$this->foodAllergy;
        }
        if ($title === 'Drug') {
            $this->drugAllergy = !$this->drugAllergy;
        }
        if ($title === 'Asthma') {
            $this->asthma = !$this->asthma;
        }
        if ($title === 'Coronary Artery Disease') {
            $this->coronaryArteryDisease = !$this->coronaryArteryDisease;
        }
        if ($title === 'Thyroid Disease') {
            $this->thyroidDisease = !$this->thyroidDisease;
        }
        if ($title === 'Peptic Ulcer') {
            $this->pepticUlcer = !$this->pepticUlcer;
        }
        if ($title === 'Hypertension') {
            $this->hypertension = !$this->hypertension;
        }
        if ($title === 'Skin Disorder') {
            $this->skinDisorder = !$this->skinDisorder;
        }
        if ($title === 'Hepatitis') {
            $this->hepatitis = !$this->hepatitis;
        }
        if ($title === 'Cancer') {
            $this->cancer = !$this->cancer;
        }
        if ($title === 'PCOS') {
            $this->pcos = !$this->pcos;
        }
        if ($title === 'Epilepsy') {
            $this->epilepsy = !$this->epilepsy;
        }
        if ($title === 'Tuberculosis') {
            $this->tuberculosis = !$this->tuberculosis;
        }
        if ($title === 'Psychological Disorder') {
            $this->psychologicalDisorder = !$this->psychologicalDisorder;
        }

        $this->saveToSession();
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
        $this->foodAllergy = $patientInfo['foodAllergy'] ?? false;
        $this->drugAllergy = $patientInfo['drugAllergy'] ?? false;
        $this->foodDetails = $patientInfo['foodDetails'] ?? '';
        $this->drugDetails = $patientInfo['drugDetails'] ?? '';
        $this->asthma = $patientInfo['asthma'] ?? false;
        $this->coronaryArteryDisease = $patientInfo['coronaryArteryDisease'] ?? false;
        $this->pepticUlcer = $patientInfo['pepticUlcer'] ?? false;
        $this->hypertension = $patientInfo['hypertension'] ?? false;
        $this->hypertensionDetails = $patientInfo['hypertensionDetails'] ?? ''; // New
        $this->skinDisorder = $patientInfo['skinDisorder'] ?? false;
        $this->skinDisorderDetails = $patientInfo['skinDisorderDetails'] ?? ''; // New
        $this->hepatitis = $patientInfo['hepatitis'] ?? false;
        $this->hepatitisDetails = $patientInfo['hepatitisDetails'] ?? ''; // New
        $this->cancer = $patientInfo['cancer'] ?? false;
        $this->cancerDetails = $patientInfo['cancerDetails'] ?? ''; // New
        $this->thyroidDisease = $patientInfo['thyroidDisease'] ?? false;
        $this->pcos = $patientInfo['pcos'] ?? false;
        $this->epilepsy = $patientInfo['epilepsy'] ?? false;
        $this->epilepsyDetails = $patientInfo['epilepsyDetails'] ?? ''; // New
        $this->tuberculosis = $patientInfo['tuberculosis'] ?? false;
        $this->tuberculosisDetails = $patientInfo['tuberculosisDetails'] ?? ''; // New
        $this->psychologicalDisorder = $patientInfo['psychologicalDisorder'] ?? false;
        $this->psychologicalDisorderDetails = $patientInfo['psychologicalDisorderDetails'] ?? ''; // New
        $this->motherConditions = $patientInfo['motherConditions'] ?? [''];
        $this->fatherConditions = $patientInfo['fatherConditions'] ?? [''];
        $this->admissions = $patientInfo['admissions'] ?? [''];

    }

    public function saveToSession()
    {
        $patientInfo = Session::get('patient_information', []);

        $patientInfo['medical_history'] = [
            'allergy' => $this->allergy,
            'foodAllergy' => $this->foodAllergy,
            'foodDetails' => $this->foodDetails,
            'drugAllergy' => $this->drugAllergy,
            'drugDetails' => $this->drugDetails,
            'asthma' => $this->asthma,
            'coronaryArteryDisease' => $this->coronaryArteryDisease,
            'thyroidDisease' => $this->thyroidDisease,
            'pepticUlcer' => $this->pepticUlcer,
            'hypertension' => $this->hypertension,
            'hypertensionDetails' => $this->hypertensionDetails,
            'skinDisorder' => $this->skinDisorder,
            'skinDisorderDetails' => $this->skinDisorderDetails,
            'hepatitis' => $this->hepatitis,
            'hepatitisDetails' => $this->hepatitisDetails,
            'cancerDetails' => $this->cancerDetails,
            'cancer' => $this->cancer,
            'pcos' => $this->pcos,
            'epilepsy' => $this->epilepsy,
            'epilepsyDetails' => $this->epilepsyDetails,
            'tuberculosis' => $this->tuberculosis,
            'tuberculosisDetails' => $this->tuberculosisDetails,
            'psychologicalDisorder' => $this->psychologicalDisorder,
            'psychologicalDisorderDetails' => $this->psychologicalDisorderDetails,
            'motherConditions' => $this->motherConditions,
            'fatherConditions' => $this->fatherConditions,
            'admissions' => $this->admissions,
        ];

        Session::put('patient_information', $patientInfo);
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
