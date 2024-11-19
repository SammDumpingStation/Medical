<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassificationModel extends Model
{
    use HasFactory;

    // Specify the table associated with the model if it's not following Laravel's naming convention
    protected $table = 'student_classifications'; // Change to your table name

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'patient_id'; // Assuming 'patient_id' is the primary key

    // Allow mass assignment on the following fields
    protected $fillable = [
        'patient_id',
        'alphabet',       // The classification type (A, B, C, etc.)
        'description',    // Additional details or description of the classification
    ];

    // Disable auto-incrementing if the primary key is not an integer
    public $incrementing = false;

    // Specify the primary key type if it's not an integer
    protected $keyType = 'string';

    // Define any relationships if necessary, e.g., a relationship to a patient:
    public function patient()
    {
        return $this->belongsTo(PatientModel::class, 'patient_id', 'patient_id');
    }
}
