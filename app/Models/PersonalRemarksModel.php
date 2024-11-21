<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRemarksModel extends Model
{
    use HasFactory;

    protected $table = 'personalremarks';

    protected $fillable = [
        'patient_id',
        'diagnosis',
        'remarks',
    ];
}
