<html>
<head>
    <title>USeP Dormitel</title>
</head>
<!-- Latest compiled and minified CSS & JS -->
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<!-- Include Bootstrap Datepicker -->
<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css"/> -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/datepicker.min.css"/>
<link rel="stylesheet" href="/css/datepicker3.min.css"/>

<style type="text/css">
    
    body {
        margin: 0;
        padding: 0;
        font-family: 'Lato', sans-serif;
    }

    .hero {
        height: 100vh;
        background-color: maroon;
        position: relative;
        overflow: hidden;
        margin-top: 70px;
    }

    .filler {
        height: 100px;
        background-color: maroon;
    }

    .logo {
        background: url('images/logo.png');
        background-size: auto 300px;
        background-repeat: no-repeat;
        background-position: top center;
        position: absolute;
        height: 300px;
        width: 100%;
        bottom: 50%;
        margin-top: -150px;
    }

    .description {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 80px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -475px;
        margin-top: 50px;
        width: 950px;
        border: 5px solid rgba(255, 255, 255, 0.8);
        color: rgba(255, 255, 255, 0.8);
        padding: 10px 50px;
    }

    .hero {
        height: 100vh;
        background-color: maroon;
        position: relative;
        overflow: hidden;
    }

    .content {
        padding: 20px 230px;
        text-align: center;
        position: relative;
    }

    .filler {
        height: 100px;
        background-color: maroon;
    }

    .logo {
        background: url('/images/logo.png');
        background-size: auto 300px;
        background-repeat: no-repeat;
        background-position: top center;
        position: absolute;
        height: 300px;
        width: 100%;
        bottom: 50%;
        margin-top: -150px;
    }

    .description {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 80px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -475px;
        margin-top: 50px;
        width: 950px;
        border: 5px solid rgba(255, 255, 255, 0.8);
        color: rgba(255, 255, 255, 0.8);
        padding: 10px 50px;
    }

    .footer-content {
        color: #cccccc;
        text-align: center;
        padding: 40px;
    }

</style>

<body>
@include('nav')
@yield('tummy')
        <!--footer start here-->
<div class="filler footer-content">
    Copyright © 2016, Mark Lawrence Mangawang Rights
    Reserved.Privacy | Terms
    and
    conditions
</div>
<script src="/jquery/jquery-2.1.3.js"></script>
<script src="/js/bootstrap335.min.js"></script>
<!-- <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script> -->
<script src="/js/formValidation.min.js"></script>
<script src="/js/FormValidationFramework.js"></script>
<!-- https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js -->
<script src="/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    //Script for Parallax
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        $('.logo').css({
            'transform': 'translate(0px, ' + scroll / 2 + '%)'
        });

        $('.description').css({
            'transform': 'translate(0px, ' + scroll / 8 + '%)'
        });//end for Parallax

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
                                message: 'The start date is not a valid'
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
                                message: 'The end date is not a valid'
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

    //Start Welcome.blade DatePicker
    var timeDiff;
        $(function () {
            $('#datetimepicker6').datepicker();
            $('#datetimepicker7').datepicker({
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
    }); //End Welcome.blade DatePicker

</script>
</body>
</html>
