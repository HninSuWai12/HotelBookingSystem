@extends('User.Layout')
@section('room')
 <div class="col-lg-12">
                <div class="room-booking">
                    <h3>Your Reservation</h3>
                    <form action="{{route('booking')}}" method="POST">
                        @csrf
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in" name="startDate">
                            <i class="icon_calendar"></i>
                            <div class="mt-3">
                                @error('satrtDate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               </div>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out" name="endDate">
                            <i class="icon_calendar"></i>
                            <div class="mt-3">
                                @error('endDate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               </div>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest" name="guest">
                                <option value="">Choose Amount</option>
                                @foreach ($book as $bookName=>$bookValue )
                                <option value="{{$bookValue}}">{{$bookName}}</option>
                                @endforeach
                            </select>
                            <div class="mt-3">
                                @error('guest')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               </div>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room" name="roomType">
                                <option value="">Choose Room</option>
                                @foreach ($room as $item )
                                    <option value="{{$item->room_name}}">{{$item->room_name}}</option>
                                @endforeach
                            </select>
                            <div class="mt-3">
                                @error('roomType')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               </div>
                        </div>
                        <div class="">
                            <label for="">Room Count</label>
                            <input type="text" name="RoomCount" class="form-control">
                            <div class="mt-3">
                                @error('RoomCount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               </div>
                        </div>
                        <button type="submit" >Book Now</button>
                    </form>
                </div>
            </div> 
@endsection