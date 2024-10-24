<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpCheckup extends Model
{
    use HasFactory;
    protected $fillable = [
        'follow_up_date',
        'checkup_details',
        'recommendations',
        'patient_name',
        'patient_address',
    ];
}
