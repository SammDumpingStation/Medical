<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class ImmunizationsHp extends Component
{
    public $patientID;
    public $patientGender;
    public $newbornImmunization; // null, 'yes', 'no', or 'unknown'
    public $tetanusToxoid, $tetanusDetails;
    public $pneumococcalVaccine;
    public $hpv, $hpvDetails;
    public $influenzaFlu, $influenzaFluDetails;
    public $others;

    // Properties for "Covid 19 Specifics" section
    public $covidVaccinated;
    public $firstDose, $firstDoseBrand;
    public $secondDose, $secondDoseBrand;
    public $covidBooster;
    public $firstBooster, $firstBoosterBrand;
    public $secondBooster, $secondBoosterBrand;
    public $unvaccinatedReason = '';

    #[On('radioSelected')]
    public function radioSelected($name, $value)
    {
        if ($name === 'newborn-immunization') {
            $this->newbornImmunization = $value;
        }
    }

    #[On('toggle-data')]
    public function toggleData($title)
    {
        if ($title === 'HPV') {
            $this->hpv = !$this->hpv;
        }
        if ($title === 'Influenza/Flu') {
            $this->influenzaFlu = !$this->influenzaFlu;
        }
        if ($title === 'Others') {
            $this->others = !$this->others;
        }
        if ($title === 'Tetanus Toxoid') {
            $this->tetanusToxoid = !$this->tetanusToxoid;
        }
        if ($title === 'Pneumococcal Vaccine') {
            $this->pneumococcalVaccine = !$this->pneumococcalVaccine;
        }
        if ($title === 'COVID-19 Vaccinated') {
            $this->covidVaccinated = !$this->covidVaccinated;
            if (!$this->covidVaccinated) {
                $this->firstDose = false;
                $this->secondDose = false;
                $this->firstDoseBrand = '';
                $this->secondDoseBrand = '';
            }
        }
        if ($title === '1st Dose') {
            $this->firstDose = !$this->firstDose;
        }
        if ($title === '2nd Dose') {
            $this->secondDose = !$this->secondDose;
        }
        if ($title === 'COVID-19 Booster') {
            $this->covidBooster = !$this->covidBooster;
            if (!$this->covidBooster) {
                $this->firstBooster = false;
                $this->secondBooster = false;
                $this->firstBoosterBrand = '';
                $this->secondBoosterBrand = '';
            }
        }
        if ($title === '1st Booster') {
            $this->firstBooster = !$this->firstBooster;
        }
        if ($title === '2nd Booster') {
            $this->secondBooster = !$this->secondBooster;
        }
        $this->saveToSession();

    }

    public function mount($patientID)
    {
        $patientInfo = Session::get('patient_information.patient_information.patient_id', []);

        $this->patientID = $patientID;
        $this->patientGender = Session::get('patient_information.personal_information.gender') ?? '';
        $this->newbornImmunization = $patientInfo['newbornImmunization'] ?? false; // null, 'yes', 'no', or 'unknown'
        $this->tetanusToxoid = $patientInfo['tetanusToxoid'] ?? false;
        $this->pneumococcalVaccine = $patientInfo['pneumococcalVaccine'] ?? false;
        $this->hpv = $patientInfo['hpv'] ?? false;
        $this->hpvDetails = $patientInfo['hpvDetails'] ?? '';
        $this->influenzaFlu = $patientInfo['influenzaFlu'] ?? false;
        $this->others = $patientInfo['others'] ?? false;
        // Properties for "Covid 19 Specifics" section
        $this->covidVaccinated = $patientInfo['covidVaccinated'] ?? false;
        $this->firstDose = $patientInfo['firstDose'] ?? false;
        $this->secondDose = $patientInfo['secondDose'] ?? false;
        $this->covidBooster = $patientInfo['covidBooster'] ?? false;
        $this->firstBooster = $patientInfo['firstBooster'] ?? false;
        $this->secondBooster = $patientInfo['secondBooster'] ?? false;

        $this->firstDoseBrand = $patientInfo['firstDoseBrand'] ?? '';
        $this->secondDoseBrand = $patientInfo['secondDoseBrand'] ?? '';
        $this->firstBoosterBrand = $patientInfo['firstBoosterBrand'] ?? '';
        $this->secondBoosterBrand = $patientInfo['secondBoosterBrand'] ?? '';
        $this->unvaccinatedReason = $patientInfo['unvaccinatedReason'] ?? '';
    }
    public function saveToSession()
    {
        $patient = Session::get('patient_information');
        $patient['immunizations'] = [
            'patientID' => $this->patientID,
            'newbornImmunization' => $this->newbornImmunization, // null, 'yes', 'no', or 'unknown'
            'tetanusToxoid' => $this->tetanusToxoid,
            'pneumococcalVaccine' => $this->pneumococcalVaccine,
            'hpv' => $this->hpv,
            'hpvDetails' => $this->hpvDetails,
            'influenzaFlu' => $this->influenzaFlu,
            'others' => $this->others,
            'covidVaccinated' => $this->covidVaccinated,
            'firstDose' => $this->firstDose,
            'secondDose' => $this->secondDose,
            'firstDoseBrand' => $this->firstDoseBrand,
            'secondDoseBrand' => $this->secondDoseBrand,
            'covidBooster' => $this->covidBooster,
            'firstBooster' => $this->firstBooster,
            'secondBooster' => $this->secondBooster,
            'firstBoosterBrand' => $this->firstBoosterBrand,
            'secondBoosterBrand' => $this->secondBoosterBrand,
            'unvaccinatedReason' => $this->unvaccinatedReason,
        ];
        Session::put('patient_information', $patient);
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.immunizations-hp');
    }
}
