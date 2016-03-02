@extends('master')
@section('tummy')
    @include('rooms.partials.header')
    <style type="text/css" media="screen">
        img {
            object-fit: cover;
        }
    </style>
    <div class="content">
        <h1>Dormitel Room Types</h1>
        <hr>
        <form id="eventForm">

        <div class="container">
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='startDatePicker'>
                        <input type='text' class="form-control" placeholder="Start Date" name="start_date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='endDatePicker'>
                        <input type='text' class="form-control" placeholder="End Date" name="end_date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <a href="check" style="text-decoration:none"><button class="btn btn-large btn-block btn-default">Check Availability<span
                            class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span></a>
                </button>
            </div>
        </div>
        </form>

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
    <script type="text/javascript">     
     //Start for DateScript
    $(document).ready(function() {
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