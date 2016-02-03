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
            margin-top: 30;
            margin-left: 155;
            margin-right: 155;

        }

        .content {
            margin-right: 60;
        }

    </style>
    <div class="content">
        <div class="row">
            <div class="item">
                <h2>{{$title}}</h2>
                <img src="/images/dummy.gif">
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
                    <button type="button" class="btn btn-primary">Make Reservation</button>
                </div>
				</span>
            </div>
        </div>
    </div>
@stop