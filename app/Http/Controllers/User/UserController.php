<?php

namespace App\Http\Controllers\User;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    //
    public function index()
    {
        $room=Room::get();
        $capacity=Room::getCapacity();
        return view('User.room',compact('room','capacity'));
    }
    public function detail($id){
        
        $detail=Room::where('id',$id)->first();

        return view('User.detail',compact('detail'));
    }
    //Search
    public function search(Request $request){
        $all=Room::paginate(5);
        $value1=$request->input('capacity');
        $value2=$request->input('room');
        $result=Room::where(function($query) use ($value1 , $value2){
            $query->where('room_name', 'Like' , '%'.$value1.'%')
            ->orWhere('capacity','Like','%'.$value2.'%');
        })->get();
        return view('User.allRooms',compact('all'));
    }
}
