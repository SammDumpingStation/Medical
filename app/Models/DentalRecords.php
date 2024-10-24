<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalRecords extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'surname',
        'given_name',
        'middle_name',
        'address',
        'course_year',
        'sex',
        'civil_status',
        'age',
        'tel_no',
        'dob',
        'allergy',
        'medical_treatment',
        'taking_drugs',
        'special_diet',
        'shortness_breath',
        'complication_healing',
        'general_health',
        'pregnant',
        'profuse_bleeding',
        'major_operation',
        'sweat_nights',
        'heart_ailment',
        'high_blood_pressure',
        'diabetes',
        'rheumatic_fever',
        'lung_disease',
        'liver_disease',
        'signature',
    ];
}
