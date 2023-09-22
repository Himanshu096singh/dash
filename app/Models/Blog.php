<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function faqs()
    {
        return $this->hasMany(Blogfaq::class);
    }
    
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function getNextAttribute(){
        return static::with('category')->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }
 

    public  function getPreviousAttribute(){
        return static::where('id', '<', $this->id)->orderBy('id','desc')->first();
    }
    
}
