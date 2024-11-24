<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $primaryKey = 'patient_id'; 
    protected $keyType = 'string'; 
    public $incrementing = false; 

    protected $fillable = [
        'patient_id',
        'full_name',
        'age',
        'gender',
        'birthday',
        'address',
        'year',
        'municipal',
        'religion',
        'occupation',
        'phone_number',
        'civil_status',
        'phil_id',
        'form_confirmation',
        'created_at',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'patient_id', 'patient_id');
    }
    public function socialHistories()
    {
        return $this->hasMany(SocialHistory::class, 'patient_id', 'patient_id');
    }
    
}
