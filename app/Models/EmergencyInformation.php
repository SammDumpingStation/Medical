<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyInformation extends Model
{
    use HasFactory;
    protected $primaryKey = 'school_id'; // Set primary key to 'school_id'
    protected $keyType = 'string'; // Set the type to 'string'
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'school_id',
        'contact_person',
        'address',
        'phone_number',
        'relationship',
    ];

    /**
     * Get the student that this emergency contact belongs to.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
