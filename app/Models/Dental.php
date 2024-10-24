<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dental extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'date',
        'name',
        'age',
        'address',
        'tel_no',
        'course_taken_year',
        'dob',
        'sex',
        'civil_status',
        'allergy_medication_food',
    ];
}
