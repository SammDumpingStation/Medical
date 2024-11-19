<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\SocialHistory;

class SocialHistoryHp extends Component
{
    public $patientID;
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
    // Retrieve the patient ID from the session
    $this->patientID = Session::get('patient_information.patient_id');

    // Log the patient ID to ensure it's being passed correctly
    Log::info('Patient ID:', ['patient_id' => $this->patientID]);

    // Attempt to retrieve existing social history from the database
    $socialHistory = SocialHistory::where('patient_id', $this->patientID)->first();

    if ($socialHistory) {
        // Populate properties from the database if data exists
        $this->smoking = $socialHistory->smoking ?? 'No';
        $this->packPerDay = $socialHistory->pack_per_day ?? null;
        $this->packInYears = $socialHistory->pack_in_years ?? null;
        $this->alcohol = $socialHistory->alcohol ?? 'No';
        $this->alcoholType = $socialHistory->alcohol_type ?? null;
        $this->bottlesPerSession = $socialHistory->bottles_per_session ?? null;
        $this->alcoholFrequency = $socialHistory->alcohol_frequency ?? null;
        $this->drug = $socialHistory->drug ?? 'No';
        $this->drugType = $socialHistory->drug_type ?? null;
        $this->sex = $socialHistory->sex ?? 'No';
        $this->partnerCount = $socialHistory->partner_count ?? null;
        $this->partnerType = $socialHistory->partner_type ?? null;
    } else {
        // If no data found in the database, initialize the fields with default values
        $this->smoking = 'No';
        $this->packPerDay = null;
        $this->packInYears = null;
        $this->alcohol = 'No';
        $this->alcoholType = null;
        $this->bottlesPerSession = null;
        $this->alcoholFrequency = null;
        $this->drug = 'No';
        $this->drugType = null;
        $this->sex = 'No';
        $this->partnerCount = null;
        $this->partnerType = null;
    }
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
        // Retrieve existing data from 'patient_information' session
        $patientInfo = Session::get('patient_information', []);

        // Prepare the new social history data
        $newSocialHistory = [
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

        // Log the old and new data to see the differences
        Log::debug('Current session data:', ['existing_social_history' => $patientInfo['social_history'] ?? 'No existing data']);
        Log::debug('New data to be saved:', ['new_social_history' => $newSocialHistory]);

        // Check if there is a change in social history data
        if (empty($patientInfo['social_history']) || $patientInfo['social_history'] !== $newSocialHistory) {
            // Log that there is a change and that the data will be saved
            Log::info('New social history data detected, initiating save...');

            // Add or update 'social_history' key with new data
            $patientInfo['social_history'] = $newSocialHistory;

            // Save the modified array back to the session
            Session::put('patient_information', $patientInfo);

            // Retrieve the patient ID from the session again (just in case)
            $patientID = $this->patientID;

            // Log that the data was successfully saved to session
            Log::info('Social history data saved to session.');

            try {
                // Log the patient ID to ensure it's being retrieved correctly
                Log::debug('Saving social history for Patient ID:', ['patient_id' => $patientID]);

                // Check if a record for the patient already exists
                $socialHistory = SocialHistory::updateOrCreate(
                    ['patient_id' => $patientID], // Corrected to use $this->patientID directly
                    [
                        'smoking' => $this->smoking,
                        'pack_per_day' => $this->packPerDay,
                        'pack_in_years' => $this->packInYears,
                        'alcohol' => $this->alcohol,
                        'alcohol_type' => $this->alcoholType,
                        'bottles_per_session' => $this->bottlesPerSession,
                        'alcohol_frequency' => $this->alcoholFrequency,
                        'drug' => $this->drug,
                        'drug_type' => $this->drugType,
                        'sex' => $this->sex,
                        'partner_count' => $this->partnerCount,
                        'partner_type' => $this->partnerType,
                    ]
                );

                // Log the successful insertion or update
                Log::info('Social History saved for Patient ID ' . $patientID, ['social_history' => $socialHistory]);

                return $socialHistory;  // Optionally return the saved object
            } catch (\Exception $e) {
                // Log the error if something goes wrong
                Log::error('Error saving social history for Patient ID ' . $patientID, [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);

                // Optionally, rethrow the exception if you want it to be handled higher up
                throw $e;
            }
        } else {
            // Log if no changes were detected
            Log::info('No changes in social history data, skipping save.');
        }
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
