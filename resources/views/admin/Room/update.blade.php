@extends('admin.Layout.master')
@section('content')
<div class="card container offset-3 col-6 mt-5">
    <div class="card-title">
        <h2 class="text-info text-center">Add Room Information</h2>
    </div>
    <div class="card-body">
        <form action="{{route('admin.update',$room->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
               <div class="mt-3">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
               </div>

            </div>
            <div class="mb-3">
                <label for="">Room Name</label>
                <input type="text" name="roomName" class="form-control" value="{{$room->room_name}}">
               <div class="mt-3">
                @error('roomName')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
               </div>

            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" value="{{$room->price}}">
                <div class="mt-3">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
            </div>
            <div class="mb-3">
                <label for="">Room Size</label>
                <input type="text" name="size" class="form-control" value="{{$room->size}}">
                <div class="mt-3">
                    @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
            </div>
            <div class="mb-3">
                <label for="">Capacity</label>
                <input type="text" name="capacity" class="form-control" value="{{$room->capacity}}">
                <div class="mt-3">
                    @error('capacity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
            </div>
            <div class="mb-3">
                <label for="">Services</label>
                <input type="text" name="service" class="form-control" value="{{$room->service}}">
                <div class="mt-3">
                    @error('service')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
            </div>
            <div class="mb-3">
                <label for="">Bed</label>
                <input type="text" name="bed" class="form-control" value="{{$room->bed}}">
                <div class="mt-3">
                    @error('bed')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn bg-black ">Update Room</button>
            </div>
        </form>
    </div>
</div>
@endsection