<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhysicalScreeningModel extends Model
{
    protected $table = 'physical_screenings'; 

     protected $fillable = [
        'patient_id',
        'height',
        'weight',
        'blood_pressure',
        'pulse_rate',
        'respiration',
        'spo2',
        'BMI',
        'BMI_class',
        'visual_acuity',
        'right_vision',
        'left_vision',
        'ishihara_color_vision',
        'tuning_fork_ad',
        'tuning_fork_as',
        'speech',
    ];

    public $timestamps = true;
}
