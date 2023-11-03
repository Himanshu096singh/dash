<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingworkshop extends Model
{
    use HasFactory;

    public function workshop(){
        return $this->belongsTo(Workshop::class);
    }

    public function orders(){
        return $this->hasOne(Orderworkshop::class,'booking_id');
    }
}
