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
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5 dateContainer">
                        <div class="input-group input-append date" id="startDatePicker">
                            <input type="text" class="form-control" placeholder="Start Date" name="start_date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5 dateContainer">
                        <div class="input-group input-append date" id="endDatePicker">
                            <input type="text" class="form-control" placeholder="End Date" name="end_date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" placeholder="Surname" name="last_name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" placeholder="Address" name="address" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" placeholder="e-Mail" name="email" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <input type="number" class="form-control" placeholder="Contact Number" name="phone" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3 control-label"></label>
                    <div class="col-xs-5">
                        <textarea class="form-control" placeholder="Additional Notes" name="notes"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-5 col-xs-offset-3">
                        <button type="submit" class="btn btn-danger">Submit</button>
                         <span></span>
                         <a href="/rooms"><button type="button" class="btn btn-default">Cancel</button></a>
                    </div>
                </div>
        </form>
        <!--End-->
    <hr>
    <script type="text/javascript">
     //Start for DateScript
    $(document).ready(function() {
        $('#startDatePicker')
            .datepicker({
                format: 'yyyy/mm/dd'
            })
            .on('changeDate', function(e) {
                // Revalidate the start date field
                $('#eventForm').formValidation('revalidateField', 'start_date');
            });

        $('#endDatePicker')
            .datepicker({
                format: 'yyyy/mm/dd'
            })
            .on('changeDate', function(e) {
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
                    },
                    first_name: {
                        validators: {
                            notEmpty: {
                                message: 'Your first Name is required'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            notEmpty: {
                                message: 'Your surname is required'
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'Your address is required'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'e-Mail is required'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Contact number is required'
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