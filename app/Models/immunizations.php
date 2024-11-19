<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immunizations extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model
    protected $table = 'immunizations_records';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'patient_id';

    // Define which fields are mass assignable
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

    // Define the relationship to Patient model if applicable
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }
}
