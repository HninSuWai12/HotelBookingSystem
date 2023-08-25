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

    public static function getCapacity(){
        return[
          'Max Person 1'=>' 1',
          'Max Person 2'=>' 2',
          'Max Person 3'=>' 3',
          'Max Person 4'=>' 4',
          'Max Person 5'=>' 5',
          'Max Person 6'=>' 6',
          'Max Person 7'=>' 7',
          'Max Person 8'=>' 8',
          'Max Person 9'=>' 9'
        ];
      }

       // a user can many booking
// a booking has a user

// a room_name has many booings
// a booking has a room-type
public function bookings(){
    return $this->hasMany(Booking::class);
}

    
}
