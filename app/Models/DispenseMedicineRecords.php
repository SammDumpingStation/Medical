<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dispenseMedicineRecords extends Model
{
    use HasFactory;
    
    protected $table = 'dispense_medicine_records';

    protected $fillable = [
        'patient_id',
        'medicine_id',
        'quantity_dispensed',
        'amount_given',
        'medicine_type',
        'given_date',
        'expiration_date',
        'created_at',
    ];

    public function medicine()
    {
        return $this->belongsTo(MedicineInventory::class, 'medicine_id', 'medicine_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

  
    // public function getYearFromPatientAttribute()
    // {
    //     return $this->patient ? $this->patient->year : null;
    // }

    
}
