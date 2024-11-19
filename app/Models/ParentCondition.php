<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCondition extends Model
{
    use HasFactory;

    protected $table = 'parent_conditions'; 

    protected $fillable = [
        'patient_id', 'mother_conditions', 'father_conditions'
    ];

    // Define the inverse relationship back to MedicalHistory
    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class, 'patient_id', 'patient_id');
    }
}
