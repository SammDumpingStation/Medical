<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalHistoryAdditionalInfo extends Model
{
  
    protected $table = 'medical_history_additional_infos';

     protected $fillable = [
        'patient_id',    
        'question',   
        'response',     
        'created_at',    
        'updated_at',   
    ];

}
