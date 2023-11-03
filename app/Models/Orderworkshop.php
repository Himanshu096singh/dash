<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderworkshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice',
        'booking_id',
        'workshop_id',
        'amount',
        'status'
    ];
    public function form(){
        return $this->hasOne(Bookingworkshop::class,'id');
    }
}
