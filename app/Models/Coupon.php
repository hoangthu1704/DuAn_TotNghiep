<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons'; 

    protected $fillable = [
        'name', 
        'code',
        'discount',
        'expiry_date',
        'created_at', 
        'updated_at',
    ];    
}

