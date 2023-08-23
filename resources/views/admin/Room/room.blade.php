@extends('admin.Layout.master')
@section('content')
<div class="container offset-3 mt-5 mb-3">
  <a href="{{route('admin.addRoom')}}">
    <button class="btn btn-success">
      Add Room
    </button>
  </a>
</div>
<div class="container">
  <div class="col-5 offset-4">
    @if(session('delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>


  </div>
  <table class="table col-7 offset-2 mt-5">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Image</th>
        <th scope="col">Room Name</th>
        <th scope="col">Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($room as $item )
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td class=""><img src="{{asset('storage/'.$item->image)}}" class="img-thumbnail  "  alt="" style="width: 90px;height:60px"></td>
        <td>{{$item->room_name}}</td>
        <td>{{$item->price}} <span>Kyats</span></td>
        <td>
          <a href="{{route('admin.view')}}">
            <button class="btn btn-secondary">View</button>
          </a>
          <a href="{{route('admin.edit',$item->id)}}">
            <button class="btn btn-info">Update</button>
          </a>
          <a href="{{route('admin.delete',$item->id)}}" onclick="return confirmDelete()">
            <button class="btn btn-danger">Delete</button>
          </a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
@section('scripts')
<script>
  function confirmDelete() {
      return confirm('Are you sure you want to delete this item?');
  }
</script>
@endsection