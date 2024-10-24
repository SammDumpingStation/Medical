<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_date',
        'college_clinic_file_number',
        'college_course',
        'year',
        'name',
        'age_sex',
        'birthday',
        'home_address',
        'religion',
        'municipal_address',
        'occupation',
        'contact_number',
        'civil_status',
        'emergency_contact_name',
        'emergency_contact_number',
        'emergency_contact_address',
        'emergency_contact_relationship',
        'smoking',
        'alcohol_drinking',
        'illegal_drug_use',
        'sexually_active',
        'allergy',
        'food',
        'drug',
        'epilepsy_seizure_disorder',
        'asthma',
        'congenital_heart_disorder',
        'thyroid_disease',
        'skin_disorder',
        'cancer',
        'diabetes_mellitus',
        'peptic_ulcer',
        'tuberculosis',
        'coronary_artery_disease',
        'pcos',
        'hepatitis',
        'hypertension_elevated_bp',
        'psychological_disorder',
        'hospital_admissions_diagnosis',
        'hospital_admissions_when',
        'past_surgical_history_operation_type',
        'past_surgical_history_when',
        'person_with_disability',
        'willing_to_donate_blood',
        'family_history_mother_side',
        'family_history_father_side',
        'immunizations_completed_newborn_immunizations',
        'immunizations_tetanus_toxoid',
        'immunizations_influenza',
        'immunizations_pneumococcal_vaccine',
        'covid_19_brand_name_first_dose',
        'covid_19_brand_name_second_dose',
        'covid_19_brand_name_first_booster',
        'covid_19_brand_name_second_booster',
        'unvaccinated_with_covid_19_reason',
    ];
}

