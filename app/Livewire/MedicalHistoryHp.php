<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\MedicalHistory;
use App\Models\Admission;

class MedicalHistoryHp extends Component
{
    // Personal medical conditions
    public $patientID;
    
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

    // Recent hospital admission
    // public $admissions = [];
  

    #[On('toggle-data')]
    public function toggle($title)
    {
        // Toggle the respective fields
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

        // Save the updated data to session after every toggle
        $this->saveToSession();
    }

    public function mount()
    {
      
        // Fix the syntax for Session::get with default values
        $patientInfo = Session::get('patient_information.medical_history', []);
        
        // Retrieve the patient ID from the session
        $this->patientID = Session::get('patient_information.patient_id');
        
        // Log the patient ID to ensure it's being passed correctly
        Log::info('Patient ID for MedicalHistory:', ['patient_id' => $this->patientID]);

        $this->allergy = $patientInfo['allergy'] ?? false;
        $this->foodAllergy = $patientInfo['foodAllergy'] ?? false;
        $this->drugAllergy = $patientInfo['drugAllergy'] ?? false;
        $this->foodDetails = $patientInfo['foodDetails'] ?? '';
        $this->drugDetails = $patientInfo['drugDetails'] ?? '';
        $this->asthma = $patientInfo['asthma'] ?? false;
        $this->coronaryArteryDisease = $patientInfo['coronaryArteryDisease'] ?? false;
        $this->pepticUlcer = $patientInfo['pepticUlcer'] ?? false;
        $this->hypertension = $patientInfo['hypertension'] ?? false;
        $this->hypertensionDetails = $patientInfo['hypertensionDetails'] ?? '';
        $this->skinDisorder = $patientInfo['skinDisorder'] ?? false;
        $this->skinDisorderDetails = $patientInfo['skinDisorderDetails'] ?? '';
        $this->hepatitis = $patientInfo['hepatitis'] ?? false;
        $this->hepatitisDetails = $patientInfo['hepatitisDetails'] ?? '';
        $this->cancer = $patientInfo['cancer'] ?? false;
        $this->cancerDetails = $patientInfo['cancerDetails'] ?? '';
        $this->thyroidDisease = $patientInfo['thyroidDisease'] ?? false;
        $this->pcos = $patientInfo['pcos'] ?? false;
        $this->epilepsy = $patientInfo['epilepsy'] ?? false;
        $this->epilepsyDetails = $patientInfo['epilepsyDetails'] ?? '';
        $this->tuberculosis = $patientInfo['tuberculosis'] ?? false;
        $this->tuberculosisDetails = $patientInfo['tuberculosisDetails'] ?? '';
        $this->psychologicalDisorder = $patientInfo['psychologicalDisorder'] ?? false;
        $this->psychologicalDisorderDetails = $patientInfo['psychologicalDisorderDetails'] ?? '';
     
        // $this->admissions = $patientInfo['admissions'] ?? [''];
       

    }

    public function saveToSession()
    {
        // Save the current data to session
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
            'cancer' => $this->cancer,
            'cancerDetails' => $this->cancerDetails,
            'pcos' => $this->pcos,
            'epilepsy' => $this->epilepsy,
            'epilepsyDetails' => $this->epilepsyDetails,
            'tuberculosis' => $this->tuberculosis,
            'tuberculosisDetails' => $this->tuberculosisDetails,
            'psychologicalDisorder' => $this->psychologicalDisorder,
            'psychologicalDisorderDetails' => $this->psychologicalDisorderDetails,
           
        ];

        $this->saveToDatabase(); // Ensure this method persists the data

        // Update the session
        Session::put('patient_information', $patientInfo);
    }

    public function saveToDatabase()
    {
        $patientID = $this->patientID;

        Log::info('Saving medical history for Patient ID: ' . $patientID);

        // Log patient ID to verify it's not null or incorrect
        if (!$patientID) {
            Log::error('Patient ID is missing or invalid.');
            session()->flash('error', 'Patient ID is missing or invalid.');
            return;
        }

        try {
            // Ensure that patient_id is included in the fields to be updated/created
            $medicalHistory = MedicalHistory::updateOrCreate(
                ['patient_id' => $patientID], 
                [
                    'patient_id' => $patientID,  
                    'allergy' => $this->allergy,
                    'food_allergy' => $this->foodAllergy,
                    'food_details' => $this->foodDetails,
                    'drug_allergy' => $this->drugAllergy,
                    'drug_details' => $this->drugDetails,
                    'asthma' => $this->asthma,
                    'coronary_artery_disease' => $this->coronaryArteryDisease,
                    'peptic_ulcer' => $this->pepticUlcer,
                    'hypertension' => $this->hypertension,
                    'hypertension_details' => $this->hypertensionDetails,
                    'skin_disorder' => $this->skinDisorder,
                    'skin_disorder_details' => $this->skinDisorderDetails,
                    'hepatitis' => $this->hepatitis,
                    'hepatitis_details' => $this->hepatitisDetails,
                    'cancer' => $this->cancer,
                    'cancer_details' => $this->cancerDetails,
                    'thyroid_disease' => $this->thyroidDisease,
                    'pcos' => $this->pcos,
                    'epilepsy' => $this->epilepsy,
                    'epilepsy_details' => $this->epilepsyDetails,
                    'tuberculosis' => $this->tuberculosis,
                    'tuberculosis_details' => $this->tuberculosisDetails,
                    'psychological_disorder' => $this->psychologicalDisorder,
                    'psychological_disorder_details' => $this->psychologicalDisorderDetails,
                 

                ]
            );
          
            Log::info('Medical history saved successfully for Patient ID: ' . $patientID);
        } catch (Exception $e) {
            Log::error('Error saving medical history', ['error' => $e->getMessage()]);
            session()->flash('error', 'An error occurred while saving medical history. Please try again.');
        }
    }

    

    public function switchToTab($tabId)
    {
        $this->saveToSession(); // Save data to session before switching tabs
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.medical-history-hp');
    }
}
