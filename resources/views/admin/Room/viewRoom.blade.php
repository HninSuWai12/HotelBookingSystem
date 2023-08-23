@section('title')
View Room
@endsection
@extends('admin.Layout.master')
@section('content')
<h2 class="mt-5 mb-3 text-center text-info">Room Detail</h2>
<div class="card col-5 offset-4 mt-5" >
    <img src="{{asset('storage/'.$room->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
     
      <p class="card-text">{{$room->room_name}}</p>
      <p class="card-text">{{$room->price}} <span>Kyats</span> / <span class="fw-bold">Per day</span></p>
      <p class="card-text">{{$room->size}} <span>ft</span></p>
      <p class="card-text">{{$room->capacity}}</p>
      <p class="card-text">{{$room->service}}</p>
      <p class="card-text">{{$room->bed}}  <span>Beds</span></p>

      <a href="{{route('room')}}" class="btn bg-black">Back</a>
    </div>
  </div>
@endsection