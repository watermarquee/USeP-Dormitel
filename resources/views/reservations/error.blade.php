<!DOCTYPE html>
@include('ernav')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservation Error</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/datepicker.min.css"/>
<link rel="stylesheet" href="/css/datepicker3.min.css"/>
<body>
	<div id="page-content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="container">
					<div style="margin-top:100px;">
						<h3 class="modal-title" align="center"><strong>ROOM FOR THAT DATE IS ALREADY FULL</strong><img src="/images/exclamation.jpg" alt="image" style='width:30px;height:30px;margin-bottom:5px;'></h4>
						<h4 class="modal-title" align="center">You may choose from other available rooms below:</h3> 
					</div>
					<div class="table-responsive">          
			        <table class="table table-bordered">
			            <thead>
			                <tr>
			                    <th>Room No.</th>
			                    <th>Room Type</th>
			                    <th>Price</th>
			                    <th>PAX</th>
			                    <th>Occupants</th>
			                    <th>Availability</th>
			                    <th>Action</th>
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
			                    <td><a class="btn btn-warning btn-xs" href="/reservations/create?type={{$row->type}}&room_id={{$row->id}}" role="button">Make Reservation</a></td>
			                    @endif
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
			        </div>
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
	 //Script Here
</script>
</body>
</html>