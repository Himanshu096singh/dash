<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingform extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'room', 'date','name','email','country','phone','message','paymentmode','paymentmethod','price'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function orders(){
        return $this->hasOne(Order::class,'form_id');
    }
}
