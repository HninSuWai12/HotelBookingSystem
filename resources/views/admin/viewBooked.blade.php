@extends('admin.Layout.master')
@section('content')
<div class="container offset-3 mt-5 mb-3">
  
</div>
<div class="container">
  <div class="col-5 offset-4">
    {{-- @if(session('delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}
</div>


  </div>
  <table class="table col-9 offset-3 mt-5">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Room Type</th>
        <th scope="col">Room Count</th>
        <th scope="col">Check-In</th>
        <th scope="col">Check-Out</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($book as $item )
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->phone_number}} </td>
        <td>{{$item->email}}</td>
        <td>{{$item->room_type}}</td>
        <td>{{$item->room_count}}</td>
        <td>{{$item->start_date}}</td>
        <td>{{$item->end_date}}</td>
        {{-- <td>
          <a href="{{route('admin.view')}}">
            <button class="btn btn-secondary">View</button>
          </a>
          <a href="{{route('admin.edit',$item->id)}}">
            <button class="btn btn-info">Update</button>
          </a>
          <a href="{{route('admin.delete',$item->id)}}" onclick="return confirmDelete()">
            <button class="btn btn-danger">Delete</button>
          </a>
        </td> --}}
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
