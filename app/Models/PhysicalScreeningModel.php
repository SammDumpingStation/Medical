<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhysicalScreeningModel extends Model
{
    protected $table = 'physical_screenings'; // Ensure this matches your database table name
    protected $guarded = []; // Use guarded if you want to allow mass assignment for all attributes
}
