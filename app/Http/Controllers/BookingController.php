<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    //
    public function book(){
        
        $room=Room::get();
        // dd($room->id);
        $book=Booking::getAmount();
        
        return view('User.booking',compact('room','book'));
    }

    public function booking(Request $request){
        $this->validationCheck($request);
        $data=$this->requestData($request);
        Booking::create($data);
        return redirect()->route('search')->with(['success'=>'You are booking Right Now! Your process is success']);
    }

private function validationCheck($request){
    $data=[
        'startDate'=>'required',
        'endDate'=>'required',
        'name'=>'required',
        'email'=>'required',
        'phoneNumber'=>'required',
        'guest'=>'required',
        'roomType'=>'required',
        'RoomCount'=>'required',
    ];
    // Validator::make($request->all(), $data)->validate();
    Validator::make($request->all(), $data)->validate();
}

private function requestData($request){
    return[
        'start_date'=>$request->startDate,
        'end_date'=>$request->endDate,
        'amount'=>$request->guest,
        'room_type'=>$request->roomType,
        'room_count'=>$request->RoomCount,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone_number'=>$request->phoneNumber,
        

    ];
}
}
