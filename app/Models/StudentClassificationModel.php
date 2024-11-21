<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassificationModel extends Model
{
    use HasFactory;

    protected $table = 'student_classifications'; 

    protected $primaryKey = 'patient_id'; 

    protected $fillable = [
        'patient_id',
        'alphabet',      
        'description',    
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
