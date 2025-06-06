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
        'allergy',
        'asthma',
        'cancer',
        'coronary_artery_disease',
        'thyroid_disease',
        'peptic_ulcer',
        'pcos',
        'hypertension',
        'epilepsy',
        'skin_disorder',
        'tuberculosis',
        'hepatitis',
        'psychological_disorder'
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
