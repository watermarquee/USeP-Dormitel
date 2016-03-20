@extends('master')
@section('tummy')
@include('rooms.partials.header')
<style type="text/css" media="screen">
    img {
        object-fit: cover;
    }
    .btn-room {
        width: 94%;
        margin: 0 9px;
    }
</style>
<div class="content">
    <h1>Dormitel Room Types</h1>
    <hr>
    <form method="POST" action="{{url('check')}}" id="eventForm">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <div class="row">
            <div class='col-md-4'>
                <div class="form-group">
                    <div class='input-group date' id='startDatePicker'>
                        <input type='text' class="form-control" placeholder="Start Date" name="start_date"/>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-unchecked"></span>
                      </span>
                  </div>
              </div>
          </div>
          <div class='col-md-4'>
            <div class="form-group">
                <div class='input-group date' id='endDatePicker'>
                    <input type='text' class="form-control" placeholder="End Date" name="end_date"/>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-unchecked"></span>
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
</form>

    <div class="row">
        <div class="col-md-4">
            <img src='/images/affordable1.jpg' alt="Image" vspace="20" hspace="10"
            style="width:250px;height:250px;border:0;">
            <a class="btn btn-large btn-danger btn-room"
            href="/rooms/page/{{\App\Room::TYPE_AFFORDABLE}}" role="button"
            style="border-radius:0">Small Room</a>
        </div>
        <div class="col-md-4">
            <img src='/images/middleclass1.jpg' alt="Image" vspace="20" hspace="10"
            style="width:250px;height:250px;border:0;">
            <a class="btn btn-large btn-danger btn-room"
            href="/rooms/page/{{\App\Room::TYPE_MIDDLE_CLASS}}" role="button"
            style="border-radius:0">Big Room</a>
        </div>
        <div class="col-md-4">
            <img src='/images/vip1.jpg' alt="Image" vspace="20" hspace="10"
            style="width:250px;height:250px;border:0;">
            <a class="btn btn-large btn-danger btn-room"
            href="/rooms/page/{{\App\Room::TYPE_VIP}}" role="button"
            style="border-radius:0">V.I.P.</a>
        </div>
    </div>
</div>

@if(isset($check_date) && isset($input))
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" align="center">Availability of Rooms from <strong style="color:#800000;"><u>Picked Date</u></strong></h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">          
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Room No.</th>
                                <th>Room Type</th>
                                <th>Price</th>
                                <th>PAX</th>
                                <th>Occupants</th>
                                <th>Availability</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_table as $index => $row)
                            
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->price }}</td>
                                <td>{{ $row->pax }}</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$currentOccupants[$index]}}</td>
                                @if($currentOccupants[$index]==$row->pax)
                                <td><p style="color:red;">Room is full</p></td>
                                <td>N/A</td>
                                @else
                                <td>{{($row->pax) - ($currentOccupants[$index])}}</a></td>
                                <td><a class="btn btn-primary btn-xs" href="/reservations/create?type={{$row->type}}&room_id={{$row->id}}" role="button">Make Reservation</a></td>
                                @endif
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif

<script type="text/javascript">
   
     $(document).ready(function() {
        $("#myModal").modal('show');
          //Start for DateScript
        $('#startDatePicker')
        .datepicker({
            format: 'yyyy/mm/dd'
        })
        .on('changeDate', function(e) {
            var startDate = $('#startDatePicker').datepicker('getDate');
                //var new
                startDate.setDate(startDate.getDate() + 7);
                $('#endDatePicker').datepicker('setEndDate', startDate);
               // Revalidate the start date field
               $('#eventForm').formValidation('revalidateField', 'start_date');
           });

        $('#endDatePicker')
        .datepicker({
            format: 'yyyy/mm/dd'
        })
        .on('changeDate', function(e) {
            var endDate = $('#endDatePicker').datepicker('getDate');
                //var new
                endDate.setDate(endDate.getDate() - 7);
                $('#startDatePicker').datepicker('setStartDate', endDate);
                //Revalidate
                $('#eventForm').formValidation('revalidateField', 'end_date');
            });

        $('#eventForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                start_date: {
                    validators: {
                        notEmpty: {
                            message: 'The start date is required'
                        },
                        date: {
                            format: 'YYYY/MM/DD',
                            max: 'end_date',
                            message: 'Start date should predate End Date'
                        }
                    }
                },
                end_date: {
                    validators: {
                        notEmpty: {
                            message: 'The end date is required'
                        },
                        date: {
                            format: 'YYYY/MM/DD',
                            min: 'start_date',
                            message: 'End Date should not predate Start Date'
                        }
                    }
                }
            }
        })
.on('success.field.fv', function(e, data) {
    if (data.field === 'start_date' && !data.fv.isValidField('end_date')) {
                    // We need to revalidate the end date
                    data.fv.revalidateField('end_date');
                }

                if (data.field === 'end_date' && !data.fv.isValidField('start_date')) {
                    // We need to revalidate the start date
                    data.fv.revalidateField('start_date');
                }   
            });
    });//End DateScript
</script>
@stop