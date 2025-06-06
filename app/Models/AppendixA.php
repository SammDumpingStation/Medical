<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppendixA extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'patient_id'; 
    protected $keyType = 'string'; 
    public $incrementing = false;
    
    protected $fillable = [
        'patient_id',
        'student_classification_id',
        'file_number'
    ];
    
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    
    public function classification(): BelongsTo
    {
        return $this->belongsTo(StudentClassification::class, 'student_classification_id');
    }
}
