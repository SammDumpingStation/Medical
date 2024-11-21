<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastSurgicalHistory extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'patient_id';
    
    protected $keyType = 'string';
    
    public $incrementing = false;
    
    protected $fillable = [
        'patient_id', 
        'operation_type', 
        'is_registered', 
        'operation_time'
    ];
}
