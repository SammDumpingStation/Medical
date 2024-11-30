<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationHistory extends Model
{
     use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'patient_id',
        'primary_diagnosis',
        'status',
        'date',
        'time',
        'updated_at',
    ];

    public function patient()
{
        return $this->hasOne(Patient::class, 'patient_id', 'patient_id');
    }
    
}
