<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admissions'; // Explicitly define the table name

    protected $fillable = [
        'patient_id', 'admission_date', 'diagnosis', 'treatment'
    ];

    // Define the inverse relationship back to MedicalHistory
    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class, 'patient_id', 'patient_id');
    }
}
