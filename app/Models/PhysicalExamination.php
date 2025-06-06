<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhysicalExamination extends Model
{
    protected $fillable = [
        'appendix_a_patient_id',
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
        'extremities'
    ];
    
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $casts = [
        'skin' => 'boolean',
        'head_neck_scalp' => 'boolean',
        'external_eyes' => 'boolean',
        'pupils_opthalmoscopic' => 'boolean',
        'ears_nose_sinuses' => 'boolean',
        'mouth_throat' => 'boolean',
        'neck_lymphnodes_throid' => 'boolean',
        'chest_breast_axilla' => 'boolean',
        'lungs' => 'boolean',
        'heart_and_valvular' => 'boolean',
        'back_and_abdomen' => 'boolean',
        'genitalia' => 'boolean',
        'anus_rectum' => 'boolean',
        'extremities' => 'boolean',
    ];

    public function appendixA(): BelongsTo
    {
        return $this->belongsTo(AppendixA::class, 'appendix_a_patient_id', 'patient_id');
    }

    public function findings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PhysicalExaminationFinding::class, 'physical_examination_id');
    }
}
