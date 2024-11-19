<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immunizations extends Model
{
    use HasFactory;

    protected $table = 'immunizations_records';

    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'patient_id',
        'newborn_immunization',
        'tetanus_toxoid',
        'pneumococcal_vaccine',
        'hpv',
        'hpv_details',
        'influenza_flu',
        'others',
        'covid_vaccinated',
        'first_dose',
        'first_dose_brand',
        'second_dose',
        'second_dose_brand',
        'covid_booster',
        'vax_date_first_dose',
        'vax_date_second_dose',
        'first_booster',
        'first_booster_brand',
        'second_booster',
        'second_booster_brand',
        'unvaccinated_reason',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }
}
