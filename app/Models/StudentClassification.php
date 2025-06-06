<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentClassification extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function appendixAs(): HasMany
    {
        return $this->hasMany(AppendixA::class);
    }
}
