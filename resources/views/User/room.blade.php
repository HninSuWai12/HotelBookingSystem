@extends('User.Layout')
@section('room')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>Sona A Luxury Hotel</h1>
                    <p>Here are the best hotel booking sites, including recommendations for international
                        travel and for finding low-priced hotel rooms.</p>
                    <a href="#" class="primary-btn">Discover Now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Hotel</h3>
                    <form action="{{route('search')}}" method="GET">
                        @csrf
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
                           <select name="capacity" id="" class="form-control">
                            <option value="">Choose Amount</option>
                            @foreach ($capacity as $capacityName=>$capacityValue)
                            <option value="{{$capacityValue}}">{{$capacityName}}</option>
                                
                            @endforeach
                           </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room" name="room">
                                <option value="">Choose Room</option>
                               @foreach ($room as $roomName)
                                   <option value="{{$roomName->room_name}}">{{$roomName->room_name}}</option>
                               @endforeach
                                
                            </select>
                        </div>
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('User/img/hero/hero-1.jpg')}}"></div>
        <div class="hs-item set-bg" data-setbg="{{asset('User/img/hero/hero-2.jpg')}}"></div>
        <div class="hs-item set-bg" data-setbg="{{asset('User/img/hero/hero-3.jpg')}}"></div>
    </div>
</section>
 <!-- About Us Section Begin -->
 <section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Intercontinental LA <br />Westlake Hotel</h2>
                    </div>
                    <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about
                        travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                        languages.</p>
                    <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                        apartment, guest house, or tree house, we’ve got you covered.</p>
                    <a href="#" class="primary-btn about-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{asset('User/img/about/about-1.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="{{asset('User/img/about/about-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->
 <!-- Services Section End -->
 <section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What We Do</span>
                    <h2>Discover Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-036-parking"></i>
                    <h4>Travel Plan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Catering Service</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-026-bed"></i>
                    <h4>Babysitting</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-024-towel"></i>
                    <h4>Laundry</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-044-clock-1"></i>
                    <h4>Hire Driver</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Bar & Drink</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
               @foreach ($room as $item)
               <div class="col-lg-3 col-md-6">
                <div class="hp-room-item set-bg" data-setbg="{{asset('storage/'.$item->image)}}" style="opacity: 90%">
                    <div class="hr-text">
                        <h3>{{$item->room_name}}</h3>
                        <h2>{{$item->price}}<span>/Pernight</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{{$item->size}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td><span>Max Person</span> {{$item->capacity}}</td>
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
    </div> 
</section>

@endsection