<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'age_sex',
        'birthday',
        'home_address',
        'religion',
        'municipal_address',
        'occupation',
        'contact_number',
        'civil_status',
        'emergency_contact_name',
        'emergency_contact_number',
        'emergency_contact_address',
        'emergency_contact_relationship',
        'college_year',
        'college_department',
        'college_course',
    ];
}
