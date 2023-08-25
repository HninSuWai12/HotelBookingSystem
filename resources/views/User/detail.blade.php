@extends('User.Layout')
@section('room')
 <!-- Room Details Section Begin -->
 <section class="room-details-section spad">
    <div class="container">
        <div class="row d-flex">
            <div class="col-4">
                <img src="{{asset('storage/'.$detail->image)}}" style="" alt="">
            </div>
            <div class="col-6">
                <div class="room-details-item">
                   
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3>{{$detail->room_name}}</h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <a href="{{route('bookView',$detail->id)}}">Booking Now</a>
                            </div>
                        </div>
                        <h2>{{$detail->price}}<span>/Pernight</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{{$detail->size}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td><span>Max Person</span> {{$detail->capacity}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td>{{$detail->bed}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>{{$detail->service}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-para">{{$detail->description}}</p>
                    </div>
                </div>
               
            </div>
            {{-- <div class="col-lg-4">
                <div class="room-booking">
                    <h3>Your Reservation</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div> --}}
        </div>

        <div class="row col-lg-12">
            <div class="rd-reviews">
                <h4>Reviews</h4>
                <div class="review-item">
                    <div class="ri-pic">
                        <img src="img/room/avatar/avatar-1.jpg" alt="">
                    </div>
                    <div class="ri-text">
                        <span>27 Aug 2019</span>
                        <div class="rating">
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star-half_alt"></i>
                        </div>
                        <h5>Brandon Kelley</h5>
                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                            magnam.</p>
                    </div>
                </div>
                <div class="review-item">
                    <div class="ri-pic">
                        <img src="img/room/avatar/avatar-2.jpg" alt="">
                    </div>
                    <div class="ri-text">
                        <span>27 Aug 2019</span>
                        <div class="rating">
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star-half_alt"></i>
                        </div>
                        <h5>Brandon Kelley</h5>
                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                            magnam.</p>
                    </div>
                </div>
            </div>
            <div class="review-add">
                <h4>Add Review</h4>
                <form action="#" class="ra-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name*">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email*">
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <h5>You Rating:</h5>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                            </div>
                            <textarea placeholder="Your Review"></textarea>
                            <button type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->
@endsection