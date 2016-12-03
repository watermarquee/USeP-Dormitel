<!DOCTYPE html>
<html>
    <head>
        <title>DONE!</title>
    </head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
       
        <style type="text/css">
            
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                font-weight: 100;
                font-family: 'Lato';
            }

            .title {
                font-size: 96px;
            }
            
            a {
                text-decoration: none;
                color: black;
            }

        </style>

    <body>       

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close"><span aria-hidden="true"><a href="/admin/dashboard">&times;</a></span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">REGISTERED!</h4>
		      </div>
		      <div class="modal-body">
		        <div class="container">
		            <div class="content">
		                 <img src="/images/logo.png" alt="image" style='width:200px;height:200px'>
					<hr>
		                <div class="title">SUCCESS!</div>
		            </div>
		            <p>New Administrative User Has Been Created!</p>
		        </div>
		      </div>
		      <div class="modal-footer">
		      </div>
		    </div>
		  </div>
		</div>

        <script src="/jquery/jquery-2.1.3.js"></script>
		<script src="/js/bootstrap335.min.js"></script>
		<script src="/js/formValidation.min.js"></script>
		<script src="/js/FormValidationFramework.js"></script>
		<script src="/js/bootstrap-datepicker.min.js"></script>

        <script type="text/javascript">
			setTimeout(function() {
		    $('#myModal').modal();
		}, 1);
		</script>
    </body>
</html>
