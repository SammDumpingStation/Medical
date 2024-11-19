<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetails extends Model
{
    use HasFactory;

    protected $table = 'patient_details';

     protected $primaryKey = 'patient_id';

    protected $fillable = [
        'patient_id',
        'emergency_contact_name',
        'emergency_contact_address',
        'emergency_contact_phone',
        'emergency_contact_relationship',
        'person_with_disability',
        'specifics',
        'registered',
        'willing_to_donate_blood',
    ];
}
