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
				<p style="margin-top:20px">
                    Wi-Fi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes
                </p>
				<p>
                    Capacity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 Humans
                </p>
				<div align="center">
                    <a href="/requests/create?type={{$pageName}}" class="btn btn-warning">Make
                        Reservation</a>
                </div>
				</span>
            </div>
        </div>
    </div>
@stop