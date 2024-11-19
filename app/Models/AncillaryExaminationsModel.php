<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AncillaryExaminationsModel extends Model
{
    protected $table = 'ancillary_examinations';

    protected $fillable = [
        'patient_id',
        'complete_blood_count',
        'fecalysis',
        'pregnancy_test',
        'urinalysis',
        'chest_xray',
        'hep_b',
        'blood_type',
        'mmse_score'
    ];
}
