<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRemarksModel extends Model
{
    use HasFactory;

    protected $table = 'personalremarks';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'patient_id',
        'diagnosis',
        'remarks',
    ];
}
