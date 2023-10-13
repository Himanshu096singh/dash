<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function faqs()
    {
        return $this->hasMany(Coursefaq::class);
    }

    public function curriculam()
    {
        return $this->hasMany(Coursecurriculam::class);
    }

    public function testimonial()
    {
        return $this->hasMany(Coursetestimonial::class);
    }
    public function inclusion()
    {
        return $this->hasMany(Courseinclusion::class);
    }
    public function schdule()
    {
        return $this->hasMany(Courseschdule::class);
    }
    public function dates()
    {
        return $this->hasMany(Coursedates::class);
    }
    public function media()
    {
        return $this->hasMany(Coursemedia::class);
    }
}
