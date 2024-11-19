<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admissions';

    protected $fillable = [
        'patient_id', 'admission_date', 'diagnosis', 'treatment'
    ];

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class, 'patient_id', 'patient_id');
    }
}
