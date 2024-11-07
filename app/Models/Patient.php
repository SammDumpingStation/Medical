<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id'; // Set primary key to 'patient_id'
    protected $keyType = 'string'; // Set the type to 'string'
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'patient_id',
        'full_name',
        'age',
        'gender',
        'birthday',
        'address',
        'municipal',
        'religion',
        'occupation',
        'phone_number',
        'civil_status',
    ];

/**
 * Get the login credentials for the student.
 */

    public function user()
    {
        return $this->belongsTo(User::class, 'patient_id', 'patient_id');
    }
}
