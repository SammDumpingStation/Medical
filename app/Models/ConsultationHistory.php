<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationHistory extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultationHistoryFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'patient_id',
        'patient_name',
        'age',
        'gender',
        'year_level',
        'department',
        'primary_diagnosis',
        'status',
        'date',
        'time',
    ];
}
