@extends('admin.master')
@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Cancelled Reservations</h1>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Reservation ID</th>
							<th>Client</th>
							<th>Address</th>
							<th>e-Mail</th>
							<th>Contact Info</th>
							<th>Room Type</th>
							<th>Room No.</th>
							<th>Rental Time</th>
							<th>Additional Notes</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>

					@foreach($reservations as $reservation)
						<tr>
							<td>{{ $reservation->person->getUNiqueID() }}</td>
							<td>{{ $reservation->person->getFullName() }}</td>
							<td>{{ $reservation->person->address }}</td>
							<td>{{ $reservation->person->email }}</td>
							<td>{{ $reservation->person->phone }}</td>
							<td>{{ $reservation->room->type }}</td>
							<td>{{ $reservation->room->name }}</td>
							<td>{{ $reservation->start_date }} — {{ $reservation->end_date }}</td>
							<td>{{ $reservation->notes }}</td>
							<td>{{ $reservation->status }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</p><?php echo $reservations->render();?>
	</div>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-left:15px;">Hide Menu</a>
</div>
</div>
</div>
@stop