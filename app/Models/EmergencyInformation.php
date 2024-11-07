<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyInformation extends Model
{
    use HasFactory;
    protected $primaryKey = 'patient_id'; // Set primary key to 'patient_id'
    protected $keyType = 'string'; // Set the type to 'string'
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'patient_id',
        'contact_person',
        'address',
        'phone_number',
        'relationship',
    ];

    /**
     * Get the student that this emergency contact belongs to.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
