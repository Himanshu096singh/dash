<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshopmodules extends Model
{
    use HasFactory;
    protected $fillable = ['workshop_id', 'question', 'answer'];
    
}
