@extends('master')
@section('tummy')
    @include('rooms.partials.header')
    <div class="content">
        <h1>USeP Dormitel Rooms</h1>
        <hr>
        <div class="container">
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker6'>
                        <input type='date' class="form-control" placeholder="Start Date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <input type='date' class="form-control" placeholder="End Date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <button type="submit" class="btn btn-large btn-block btn-default">Check Availability<span
                            class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span>
                </button>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <img src='images/dummy.gif' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_AFFORDABLE}}" role="button"
                   style="border-radius:0">Affordable</a>
            </div>
            <div class="col-md-4">
                <img src='images/dummy.gif' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_MIDDLE_CLASS}}" role="button"
                   style="border-radius:0">Middle class</a>
            </div>
            <div class="col-md-4">
                <img src='images/dummy.gif' alt="Image" vspace="20" hspace="15"
                     style="width:250px;height:250px;border:0;">
                <a class="btn btn-large btn-block btn-danger"
                   href="/rooms/page/{{\App\Room::TYPE_VIP}}" role="button"
                   style="border-radius:0">V.I.P.</a>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script type="text/javascript">
        var timeDiff;
        $(function () {
            $('#datetimepicker6').datetimepicker();
            $('#datetimepicker7').datetimepicker({
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                if (timeDiff) {
                    $('#datetimepicker7').data("DateTimePicker").date(e.date.add(timeDiff, 's'));
                    $('#datetimepicker7').data("DateTimePicker").minDate(false);
                } else $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                var CurrStartDate = new Date($('#datetimepicker6').data("DateTimePicker").date());
                var CurrEndDate = new Date($('#datetimepicker7').data("DateTimePicker").date());
                if (CurrEndDate) {
                    timeDiff = (CurrEndDate - CurrStartDate) / 1000;
                }
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
@stop