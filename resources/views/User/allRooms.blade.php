@extends('User.Layout')
@section('room')
<div class="">
    @if (session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif

</div>
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
           @foreach ($all as $item)
           <div class="col-lg-4 col-md-6">
            <div class="room-item">
                <img src="{{asset('storage/'.$item->image)}}" alt="">
                <div class="ri-text">
                    <h4>{{$item->room_name}}</h4>
                    <h3>{{$item->price}}<span>/Pernight</span></h3>
                    <table>
                        <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>{{$item->size}} ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>{{$item->capacity}}</td>
                            </tr>
                            <tr>
                                <td class="r-o">Bed:</td>
                                <td>{{$item->bed}}</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>{{$item->service}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('detail',$item->id)}}" class="primary-btn">More Details</a>
                </div>
            </div>
        </div>
           @endforeach
           
        </div>
    </div>
</section>
@endsection