<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhysicalExaminationFinding extends Model
{
    protected $fillable = [
        'physical_examination_id',
        'body_part',
        'findings'
    ];

    public function examination(): BelongsTo
    {
        return $this->belongsTo(PhysicalExamination::class, 'physical_examination_id');
    }
}
