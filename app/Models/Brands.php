<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    const HONDA = 1;
    const CHEVROLET = 2;
    const PEUGEOT = 3;
    const MITISUBISHI = 4;
    const VOLKSWAGEN = 5;

    const STRING_HONDA = 'Honda';
    const STRING_CHEVROLET = 'Chevrolet';
    const STRING_PEUGEOT = 'Peugeot';
    const STRING_MITISUBISHI = 'Mitisubishi';
    const STRING_VOLKSWAGEN = 'Volkswagen';
    
    use HasFactory;
}
