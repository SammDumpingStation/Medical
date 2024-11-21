<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultation extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'medical_consultation';

    // Specify the primary key if it's not the default 'id'
    protected $primaryKey = 'id';

    // If you're using timestamps, Laravel will manage them automatically,
    // but if you want to disable it, you can set this to false
    public $timestamps = true;

    // Define the attributes that are mass assignable
    protected $fillable = [
        'patient_id', 'name', 'mobile_number', 'dob_age_sex', 'course_year', 'philhealth',
        'address', 'emergency_contact_name', 'emergency_contact_phone', 'temperature',
        'blood_pressure', 'pulse_rate', 'respiratory_rate', 'o2_saturation', 'height',
        'weight', 'bmi', 'nutritional_status', 'chief_complaints', 'medical_conditions',
        'medications', 'pregnancy_status', 'last_menstrual_period', 'procedures_operations',
        'findings_diagnosis', 'recommendations', 'medications_dispensed', 'physician',
        'family_name', 'first_name', 'middle_name', 'age', 'sex', 'civil_status',
        'phone_address', 'vital_signs', 'chief_complaint',
    ];


    // You can define relationships here, if needed
    // For example, if there's a Patient model and you want to define a relationship:
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
