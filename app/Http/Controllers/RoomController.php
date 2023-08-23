<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    //
    public function room(){
        $room=Room::get();
        return view('admin.Room.room',compact('room'));
    }
    public function addRoom(){
        return view('admin.Room.addRoom');
    }
    public function uploadData(Request $request){
       $data= $this->validationCheck($request,"create");
       $data = $this->requestData($request);
        $fileName=uniqid().$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public', $fileName);
        $data['image'] = $fileName;

        //dd($data);
        
         Room::create($data);
         return redirect()->route('room');
    }
    //update
    public function edit($id){
        $room=Room::first();
        return view('admin.Room.update',compact('room'));
    }
    public function update($id,Request $request){
       
        $data= $this->validationCheck($request,"update");
       $data = $this->requestData($request);
       if ($request->hasFile('image')) {
        $dbImage=Room::where('id' ,$id)->first();
        $dbImage=$dbImage->image;
        //dd($dbImage);
        if($dbImage!=null){
            Storage::delete('public/'.$dbImage);
        }

        $fileName=uniqid().$request->file('image')->getClientOriginalName();
    $request->file('image')->storeAs('public',$fileName);
    $data['image']=$fileName;

    }

        //dd($data);
        
         Room::where('id',$id)->update($data);
         return redirect()->route('room');
    }

    //View
    public function view(){
        $room=Room::first();
        return view('admin.Room.viewRoom',compact('room'));
    }
    //Delete
    public function delete($id){
        $data= Room::findOrFail($id);
        
        
        if ($data->image) {
            //Storage::delete($data->image);
            $imagePath = public_path('storage/' . $data->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        
        $data->delete();
        return back()->with(['delete'=>'Delete Success']);
       
    }

    //RequestStoreData
    private function requestData($request)
    {
        return [
            'room_name' => $request->roomName,
            'price'=>$request->price,
            'size'=>$request->size,
            'capacity'=>$request->capacity,
            'service'=>$request->service,
            'bed'=>$request->bed
        ];
    }

    //Validation Check
    private function validationCheck($request,$action){
        $validationCheck=[
            'roomName' => 'required',
            'price'=>'required',
            'size'=>'required',
            'capacity'=>'required',
            'service'=>'required',
            'bed'=>'required'
        ];
        // $validationCheck['image']=$action == "create" ? "required|mimes:png,jpeg,webp,jpg,jfif|file" : "mimes:png,jpeg,webp,jpg,jfif|file";
        // Validator::make($request->all(),$validationCheck)->validate();

        $imageValidation = $action == "create"
        ? "required|mimes:png,jpeg,webp,jpg,jfif|file"
        : "mimes:png,jpeg,webp,jpg,jfif|file";

    

    $validationCheck['image'] = $imageValidation;

    Validator::make($request->all(), $validationCheck)->validate();
    }
    
}
