@extends('master')
@section('tummy')
@include('rooms.partials.header')
    <style>

        img {
            margin-top: 10;
            width: 500px;
            height: 350px;
        }

        .caption {
            display: block;
            text-align: justify;
            margin-top: 30px;
            margin-left: 155px;
            margin-right: 155px;
        }

        .content {
            margin: 10px;
        }
    </style>
    <div class="content">
        <div class="row">
            <div class="item">
                <h2>{{$title}}</h2>
                <img src="/images/{{$imageUrl}}">
				<span class="caption">
    
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Max. Capacity</th>
                            <th>Air Conditioned</th>
                            <th>Wi-Fi Enabled</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $px }}</td>
                            <td>☑ YES</td>
                            <td>☑ YES</td>
                        </tr>
                </tbody>
            </table>
                    <h3></h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Room No.</th>
                                <th>&nbsp&nbsp&nbsp&nbspPrice</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                             
                                    <td>{{$room->name}}</td>
                                    <td>Php {{$room->price}}.00</td>
                                    <td>
                                    <!-- Get Room Type only to display at Modal -->
                                        <a href="/reservations/create?type={{$pageName}}&room_id={{$room->id}}"
                                           class="btn btn-warning" style="border-radius:0px;">Book NOW!</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
				</span>
            </div>
        </div>
    </div>
@stop