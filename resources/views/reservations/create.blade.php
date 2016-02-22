@extends('master')
@section('tummy')

    <div class="container">
        <h1>Reservation Details: Step 1</h1>

        <h3>Room Type: {{$title}}</h3>
        <hr>

        <form action="{{ url('reservations') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="row">
                <!-- left column -->

                <div class='col-md-3'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker6'>
                            <input type='date' class="form-control" placeholder="Start Date"
                                   name="start_date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker7'>
                            <input type='date' class="form-control" placeholder="End Date"
                                   name="end_date"/>
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
                        </div>
                    </div>
                </div>


                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        Para sa <strong>.alert</strong>. Unya na ni kay kapuy.
                    </div>


                    <h3>Personal Info:</h3>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-9 control-label"></label>

                            <div class="col-lg-8">
                                <input class="form-control" type="text" placeholder="First Name"
                                       name="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-9 control-label"></label>

                            <div class="col-lg-8">
                                <input class="form-control" type="text" placeholder="Last Name"
                                       name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-9 control-label"></label>

                            <div class="col-lg-8">
                                <input class="form-control" type="text" placeholder="Address"
                                       name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-9 control-label"></label>

                            <div class="col-lg-8">
                                <input class="form-control" type="text" placeholder="E-mail"
                                       name="email">
                            </div>
                        </div>

                        <!--Dynamic Mobile Number-->
                        <form id="phoneForm" class="form-horizontal"
                              data-fv-framework="bootstrap"
                              data-fv-icon-valid="glyphicon glyphicon-ok"
                              data-fv-icon-invalid="glyphicon glyphicon-remove"
                              data-fv-icon-validating="glyphicon glyphicon-refresh">

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Your country</label>

                                <div class="col-xs-5">
                                    <select class="form-control" name="country">
                                        <option value="US">United States</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BR">Brazil</option>
                                        <option value="CN">China</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="IN">India</option>
                                        <option value="MA">Morocco</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PH">Philippines</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="ES">Spain</option>
                                        <option value="TH">Thailand</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="VE">Venezuela</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Phone number</label>

                                <div class="col-xs-5">
                                    <input type="number" class="form-control" name="phone"
                                           data-fv-phone="true"
                                           data-fv-phone-country="countrySelectBox"
                                           data-fv-phone-message="The value is not valid %s phone number"/>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span></span>
                                <a href="/rooms"><input type="reset" class="btn btn-default"
                                                        value="Cancel"></a>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <!--Script for dynamic Mobile Input-->
    <script>
        $(document).ready(function () {
            $('#phoneForm')
                    .formValidation()
                // Revalidate phone number when changing the country
                    .on('change', '[name="countrySelectBox"]', function (e) {
                        $('#phoneForm').formValidation('revalidateField', 'phoneNumber');
                    });
        });
    </script>

@stop