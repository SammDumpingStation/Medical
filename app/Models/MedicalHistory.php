<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $table = 'medical_histories';
    protected $primaryKey = 'patient_id'; 

    protected $fillable = [
        'patient_id',
        'allergy', 'food_allergy', 'food_details', 'drug_allergy', 'drug_details', 
        'asthma', 'coronary_artery_disease', 'peptic_ulcer', 'hypertension', 
        'hypertension_details', 'skin_disorder', 'skin_disorder_details', 'hepatitis', 
        'hepatitis_details', 'cancer', 'cancer_details', 'thyroid_disease', 'pcos', 
        'epilepsy', 'epilepsy_details', 'tuberculosis', 'tuberculosis_details', 
        'psychological_disorder', 'psychological_disorder_details', 'created_at',
        
        'under_care', 'last_appointment_date', 
        'diabetes', 'high_blood_pressure', 'coronary_artery_disease', 
        'seizure_disorder', 'arthritis', 'urinary_tract_infection', 'hepatitis', 
        'thyroid_h_imbalance', 'allergies', 'hiv_aids', 'any_infection', 
        'additional_conditions', 'other_conditions',

         'present_medications', 'pregnant', 'lmp_date', 
         'procedures_operations', 'record_date'
    ];
    

     public function parentConditions()
    {
        return $this->hasOne(ParentCondition::class, 'patient_id', 'patient_id');
    }

    public function admissions()
    {
        return $this->hasMany(Admission::class, 'patient_id', 'patient_id');
    }

  
}
