<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'form_id',
        'course_id',
        'amount',
        'status'
    ];

    public function form(){
        return $this->hasOne(Bookingform::class,'id');
    }
}
