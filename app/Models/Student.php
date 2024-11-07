<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'school_id'; // Set primary key to 'school_id'
    protected $keyType = 'string'; // Set the type to 'string'
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'school_id',
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
        return $this->belongsTo(User::class, 'school_id', 'school_id');
    }

// /**
//  * Get the emergency contacts for the student.
//  */

//     public function emergencyInformation()
//     {
//         return $this->hasMany(EmergencyInformation::class);
//     }
}
