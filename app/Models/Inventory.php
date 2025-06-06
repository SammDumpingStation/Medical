<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acquired_at',
        'no_of_pieces',
        'status',
        'turn_over_to_supply',
        'damaged',
    ];

  
}
