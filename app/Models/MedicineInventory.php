<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineInventory extends Model
{
    use HasFactory;
    
    protected $table = 'medicine_inventories';
    protected $primaryKey = 'medicine_id';
    protected $fillable = [
       
        'name', 
        'brand_name', 
        'dosage', 
        'manufactured_date', 
        'expiry', 
        'turn_over_to_supply', 
        'stock_on_hand', 
        'dispensed', 
        'status',
    ];
}
