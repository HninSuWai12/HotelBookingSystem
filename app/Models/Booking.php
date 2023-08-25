<?php

namespace App\Models;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
      use HasFactory;

      protected $fillable=[
        'user_id','room_id','start_date','end_date',
        'amount','room_type','room_count',
      ];

      public static function getAmount(){
        return[
          '1'=>'1',
          '2'=>'2',
          '3'=>'3',
          '4'=>'4',
          '5'=>'5',
          '6'=>'6',
          '7'=>'7',
          '8'=>'8',
          '9'=>'9'
        ];
      }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function rooms(){
        return $this->hasMany(Room::class);
    }

}

