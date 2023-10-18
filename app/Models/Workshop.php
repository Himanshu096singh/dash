<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    
    public function modules()
    {
        return $this->hasMany(Workshopmodules::class);
    }

    public function testimonial()
    {
        return $this->hasMany(Workshoptestimonials::class);
    }
    
    public function except()
    {
        return $this->hasMany(Workshopexcept::class);
    }
}
