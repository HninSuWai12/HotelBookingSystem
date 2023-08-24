<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
       'image', 'room_name','price','size','capacity','service','bed','description'
    ];

       // a user can many booking
// a booking has a user

// a room_name has many booings
// a booking has a room-type
public function bookings(){
    return $this->hasMany(Booking::class);
}

    
}
