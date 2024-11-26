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


    #[On('toggle-data')]
    public function toggle($title)
    {
        $fields = [
            'Allergy' => 'allergy',
            'Food' => 'foodAllergy',
            'Drug' => 'drugAllergy',
            'Asthma' => 'asthma',
            'Coronary Artery Disease' => 'coronaryArteryDisease',
            'Thyroid Disease' => 'thyroidDisease',
            'Peptic Ulcer' => 'pepticUlcer',
            'Hypertension' => 'hypertension',
            'Skin Disorder' => 'skinDisorder',
            'Hepatitis' => 'hepatitis',
            'Cancer' => 'cancer',
            'PCOS' => 'pcos',
            'Epilepsy' => 'epilepsy',
            'Tuberculosis' => 'tuberculosis',
            'Psychological Disorder' => 'psychologicalDisorder',
        ];

        if (array_key_exists($title, $fields)) {
            $this->{$fields[$title]} = !$this->{$fields[$title]};
        }
    }

    public function mount()
{
     $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);

    Log::info('Patient ID for MedicalHistory:', ['patient_id' => $this->patientID]);

    $medicalHistory = MedicalHistory::where('patient_id', $this->patientID)->first();

    if ($medicalHistory) {
  Log::info('MEDICAL HSTORY DATA AVAILABLE FROM DB ');


        $this->allergy = $medicalHistory->allergy;
        $this->foodAllergy = $medicalHistory->food_allergy;
        $this->foodDetails = $medicalHistory->food_details;
        $this->drugAllergy = $medicalHistory->drug_allergy;
        $this->drugDetails = $medicalHistory->drug_details;
        $this->asthma = $medicalHistory->asthma;
        $this->coronaryArteryDisease = $medicalHistory->coronary_artery_disease;
        $this->pepticUlcer = $medicalHistory->peptic_ulcer;
        $this->hypertension = $medicalHistory->hypertension;
        $this->hypertensionDetails = $medicalHistory->hypertension_details;
        $this->skinDisorder = $medicalHistory->skin_disorder;
        $this->skinDisorderDetails = $medicalHistory->skin_disorder_details;
        $this->hepatitis = $medicalHistory->hepatitis;
        $this->hepatitisDetails = $medicalHistory->hepatitis_details;
        $this->cancer = $medicalHistory->cancer;
        $this->cancerDetails = $medicalHistory->cancer_details;
        $this->thyroidDisease = $medicalHistory->thyroid_disease;
        $this->pcos = $medicalHistory->pcos;
        $this->epilepsy = $medicalHistory->epilepsy;
        $this->epilepsyDetails = $medicalHistory->epilepsy_details;
        $this->tuberculosis = $medicalHistory->tuberculosis;
        $this->tuberculosisDetails = $medicalHistory->tuberculosis_details;
        $this->psychologicalDisorder = $medicalHistory->psychological_disorder;
        $this->psychologicalDisorderDetails = $medicalHistory->psychological_disorder_details;
    } else {
        $patientInfo = Session::get('patient_information.medical_history', []);

        Log::info('MEidcal HIstory Mount  NO DATA');


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
    }
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

        $this->saveToDatabase();

        Session::put('patient_information', $patientInfo);
    }

    public function saveToDatabase()
    {
        $patientID = $this->patientID;

        Log::info('Saving medical history for Patient ID: ' . $patientID);

         if (!$patientID) {
            Log::error('Patient ID is missing or invalid.');
            session()->flash('error', 'Patient ID is missing or invalid.');
            return;
        }

        try {
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
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.medical-history-hp');
    }
}
