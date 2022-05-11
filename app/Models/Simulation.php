<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'brand_id',
        'installment',
        'money_deposit',
        'email',
        'simulation_value'
    ];
}
