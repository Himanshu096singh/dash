<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coursemedia extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'image', 'alt'];
}
