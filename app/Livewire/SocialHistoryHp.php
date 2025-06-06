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
   $this->patientID = Session::get('patient_information.personal_information.patient_id', 0);

    Log::info('Patient ID SocialHIstoryHp:', ['patient_id' => $this->patientID]);

    $socialHistory = SocialHistory::where('patient_id', $this->patientID)->first();

    if ($socialHistory) {
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
        $patientInfo = Session::get('patient_information', []);

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

        Log::debug('Current session data:', ['existing_social_history' => $patientInfo['social_history'] ?? 'No existing data']);
        Log::debug('New data to be saved:', ['new_social_history' => $newSocialHistory]);

        if (empty($patientInfo['social_history']) || $patientInfo['social_history'] !== $newSocialHistory) {
            Log::info('New social history data detected, initiating save...');

            $patientInfo['social_history'] = $newSocialHistory;

            Session::put('patient_information', $patientInfo);

            $patientID = $this->patientID;

            Log::info('Social history data saved to session.');

            try {
                Log::debug('Saving social history for Patient ID:', ['patient_id' => $patientID]);

                $socialHistory = SocialHistory::updateOrCreate(
                    ['patient_id' => $patientID],
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

                 Log::info('Social History saved for Patient ID ' . $patientID, ['social_history' => $socialHistory]);
                 session()->flash('message', 'Saved Successfully!.');
                return $socialHistory;
            } catch (\Exception $e) {
                Log::error('Error saving social history for Patient ID ' . $patientID, [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);

                 throw $e;
            }
        } else {

            Log::info('No changes in social history data, skipping save.');
        }
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]);
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.social-history-hp');
    }
}
