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
        return view('User.room',compact('room'));
    }
    public function detail($id){
        //jdd($id);
        $detail=Room::where('id',$id)->first();
        return view('User.detail',compact('detail'));
    }
}
