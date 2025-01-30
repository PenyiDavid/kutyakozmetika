<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foglalas extends Model
{
    use HasFactory;

    protected $table = 'foglalasok';

    protected $fillable = [
        'nev',
        'datum',
        'ido',
    ];
}
