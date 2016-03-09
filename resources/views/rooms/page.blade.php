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
				<span class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident pariatur,
				veritatis, ducimus quidem doloribus distinctio officia dignissimos repellendus itaque, est id adipisci
				earum perspiciatis.
		
                    @if(count($rooms) == 0)
                        No rooms available.
                    @else
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Room No.</th>
                                <th>&nbsp&nbsp&nbsp&nbspPrice</th>
                                <th>Current Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->name}}</td>
                                    <td>Php {{$room->price}}.00</td>
                                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$room->occupants}} (of {{$room->pax}})</th>
                                    <td>
                                        <a href="/reservations/create?type={{$pageName}}&room_id={{$room->id}}"
                                           class="btn btn-warning">Reserve this room</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
				</span>
            </div>
        </div>
    </div>
@stop