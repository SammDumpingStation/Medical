<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastSurgicalHistory extends Model
{
    use HasFactory;
    
    // Define the primary key as 'patient_id'
    protected $primaryKey = 'patient_id';
    
    // Set the primary key type to 'string'
    protected $keyType = 'string';
    
    // Disable auto-incrementing for the primary key
    public $incrementing = false;
    
    // Specify the fields that are mass assignable
    protected $fillable = [
        'patient_id', 
        'operation_type', 
        'is_registered', 
        'operation_time'
    ];
}
