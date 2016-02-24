@extends('master')
@section('tummy')

    <div class="container">
        <h1>Reservation Details: Step 1</h1>

        <h3>Room Type: {{$title}}</h3>
        <hr>

        <form id="eventForm" action="{{ url('reservations') }}" method="POST" class="form-horizontal">
            
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <h3>Required Information:</h3>
            <!--Start-->
            <style type="text/css">
            /**
             * Override feedback icon position
             * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
             */
            #eventForm .dateContainer .form-control-feedback {
                top: 0;
                right: -15px;
            }
            </style>

                <div class="form-group">
                    <label class="col-xs-3 control-label">Start date</label>
                    <div class="col-xs-5 dateContainer">
                        <div class="input-group input-append date" id="startDatePicker">
                            <input type="text" class="form-control" name="start_date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">End date</label>
                    <div class="col-xs-5 dateContainer">
                        <div class="input-group input-append date" id="endDatePicker">
                            <input type="text" class="form-control" name="end_date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">First Name</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="first_name" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">Surname</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="last_name" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">Address</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="address" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">e-Mail</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="email" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3 control-label">Contact Number</label>
                    <div class="col-xs-5">
                        <input type="number" class="form-control" name="phone" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-5 col-xs-offset-3">
                        <button type="submit" class="btn btn-danger">Submit</button>
                         <span></span>
                         <a href="/rooms"><button type="button" class="btn btn-default">button</button></a>
                    </div>
                </div>
        </form>
        <!--End-->
    <hr>

@stop