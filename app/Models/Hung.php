<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hung extends Model
{
    use HasFactory;

    protected $table = 'hungs'; 

    protected $fillable = [
        'name','descriptions','images','hung'
    ];
}
