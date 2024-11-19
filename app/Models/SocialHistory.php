<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialHistory extends Model
{
    use HasFactory;

       // Define the table name if it's not the plural form of the model
       protected $table = 'social_histories';

       // Define the primary key if it's not 'id'
       protected $primaryKey = 'patient_id';

       protected $fillable = [
        'patient_id', 'smoking', 'pack_per_day', 'pack_in_years', 'alcohol', 'alcohol_type',
        'bottles_per_session', 'alcohol_frequency', 'drug', 'drug_type', 'sex', 'partner_count', 'partner_type'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class); 
    }
}
