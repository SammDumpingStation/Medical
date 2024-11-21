<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhysicalExaminationModel extends Model
{
    protected $table = 'physical_examinations';

    protected $fillable = [
        'patient_id',
        'skin',
        'head_neck_scalp',
        'external_eyes',
        'pupils_opthalmoscopic',
        'ears_nose_sinuses',
        'mouth_throat',
        'neck_lymphnodes_throid',
        'chest_breast_axilla',
        'lungs',
        'heart_and_valvular',
        'back_and_abdomen',
        'genitalia',
        'anus_rectum',
        'extremities',
    ];
}
