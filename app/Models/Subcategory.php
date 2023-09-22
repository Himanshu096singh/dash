<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function faq()
    {
        return $this->hasMany(Subcategoryfaq::class);
    }
}
