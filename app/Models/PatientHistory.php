<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientHistory extends Model
{
    /** @use HasFactory<\Database\Factories\PatientHistoryFactory> */
    use HasFactory;
    protected $primaryKey = 'patient_id'; // Set primary key to 'patient_id'
    protected $keyType = 'string'; // Set the type to 'string'
    public $incrementing = false; // Disable auto-increment
    protected $guarded = [];
}
