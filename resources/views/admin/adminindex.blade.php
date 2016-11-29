@extends('master')
@section('foot-two')
    <h3 align="center" style="margin-top:120px;">Add New Administrator</h3>
    <div class="container" style="margin-left: 150px;">
        <form id="eventForm" class="form-horizontal" style="margin-top: 50px">
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
                form {
                  margin: 0 auto;
                }
            </style>
            <div class="form-group">
                <label class="col-xs-3 control-label"></label>

                <div class="col-xs-5">
                    <input type="text" class="form-control" placeholder="Name"
                           name="name" style="border-radius:0px;"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label"></label>

                <div class="col-xs-5">
                    <input type="text" class="form-control" placeholder="e-Mail" name="email" style="border-radius:0px;"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label"></label>

                <div class="col-xs-5">
                    <input type="password" class="form-control" placeholder="Password"
                           name="password" style="border-radius:0px;"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label"></label>

                <div class="col-xs-5">
                    <input type="password" class="form-control" placeholder="Confirm Password"
                           name="confirm_password" style="border-radius:0px;"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-danger" style="border-radius:0px;">Submit</button>
                    <span></span>
                    <a href="/admin/dashboard">
                        <button type="button" class="btn btn-default" style="border-radius:0px;">Cancel</button>
                    </a>
                </div>
            </div>
        </form>
        <!--End-->
<script type="text/javascript">
//Start for DateScript
$(document).ready(function () {
  $('#eventForm')
    .formValidation({
    framework: 'bootstrap',
      icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        name: {
          validators: {
            notEmpty: {
              message: 'A Name is required'
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
        password: {
          validators: {
            notEmpty: {
              message: 'A password is required'
            }
          }
        },
        confirm_password: {
          validators: {
            notEmpty: {
              message: 'A confirmation password is required'
            }
          }
        },
      }
    });//End Script
</script>
@stop
