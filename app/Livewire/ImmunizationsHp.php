<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\immunizations;

class ImmunizationsHp extends Component
{
    public $patientID;
    public $patientGender;
    public $newbornImmunization; 
    public $tetanusToxoid, $tetanusDetails;
    public $pneumococcalVaccine;
    public $hpv, $hpvDetails;
    public $influenzaFlu, $influenzaFluDetails;
    public $others;

    public $covidVaccinated;
    public $firstDose, $firstDoseBrand;
    public $secondDose, $secondDoseBrand;
    public $covidBooster;
    public $firstBooster, $firstBoosterBrand;
    public $secondBooster, $secondBoosterBrand;
    public $unvaccinatedReason = '';

    public $first_dose_date;
    public $second_dose_date;
    

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
        'newbornImmunization' => $this->newbornImmunization, 
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

    $immunization = Immunizations::updateOrCreate(
        ['patient_id' => $this->patientID], 
        [
            'newborn_immunization' => $this->newbornImmunization,
            'tetanus_toxoid' => $this->tetanusToxoid,
            'pneumococcal_vaccine' => $this->pneumococcalVaccine,
            'hpv' => $this->hpv,
            'hpv_details' => $this->hpvDetails,
            'influenza_flu' => $this->influenzaFlu,
            'others' => $this->others,
            'covid_vaccinated' => $this->covidVaccinated,
            'first_dose' => $this->firstDose,
            'first_dose_brand' => $this->firstDoseBrand,
            'second_dose' => $this->secondDose,
            'second_dose_brand' => $this->secondDoseBrand,
            'covid_booster' => $this->covidBooster,
            'first_booster' => $this->firstBooster,
            'first_booster_brand' => $this->firstBoosterBrand,
            'second_booster' => $this->secondBooster,
            'second_booster_brand' => $this->secondBoosterBrand,
            'unvaccinated_reason' => $this->unvaccinatedReason,
        ]
    );
}


    public function switchToTab($tabId)
    {
        $this->saveToSession();
        $this->dispatch('switch-tab', ['tabId' => $tabId]); 
    }
    public function render()
    {
        return view('livewire.staff.hp-form-section.immunizations-hp');
    }
}
