@extends('master')
@section('tummy')
    @include('rooms.partials.header')
    <style type="text/css" media="screen">
        img {
            object-fit: cover;
        }
    </style>
    <div class="content">
        <h1>USeP Dormitel Rooms</h1>
        <hr>
        <div class="container">
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker6'>
                        <input type='text' class="form-control" placeholder="Start Date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <input type='text' class="form-control" placeholder="End Date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <button type="submit" class="btn btn-large btn-block btn-default">Check Availability<span
                            class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span>
                </button>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <img src='/images/affordable1.jpg' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_AFFORDABLE}}" role="button"
                   style="border-radius:0">Affordable</a>
            </div>
            <div class="col-md-4">
                <img src='/images/middleclass1.jpg' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_MIDDLE_CLASS}}" role="button"
                   style="border-radius:0">Middle class</a>
            </div>
            <div class="col-md-4">
                <img src='/images/vip1.jpg' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_VIP}}" role="button"
                   style="border-radius:0">V.I.P.</a>
            </div>
        </div>
    </div>
@stop