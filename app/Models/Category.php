<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    
    public function subcategory(){
        return $this->hasMany(Subcategory::class);
    }
    
    public function error(){
        return $this->hasMany(Error::class);
    }
    
    public function faqs()
    {
        return $this->hasMany(Categoryfaq::class);
    }
}
