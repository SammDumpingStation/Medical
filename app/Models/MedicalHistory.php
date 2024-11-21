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
        'psychological_disorder', 'psychological_disorder_details'
    ];

    // Define a relationship with the ParentConditions model
    public function parentConditions()
    {
        return $this->hasOne(ParentCondition::class, 'patient_id', 'patient_id');
    }

    // Define a relationship with the Admissions model
    public function admissions()
    {
        return $this->hasMany(Admission::class, 'patient_id', 'patient_id');
    }

    // You can also add any custom logic or methods here if needed for further processing
}
