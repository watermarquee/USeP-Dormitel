@extends('admin.master')
@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Upcoming Reservations</h1>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Reservation ID</th>
							<th>Client</th>
							<th>Room Type</th>
							<th>Rental Time</th>
						</tr>
					</thead>
					<tbody>

					@foreach($reservations as $reservation)
						<tr>
							<td>{{ $reservation->person->getUNiqueID() }}</td>
							<td>{{ $reservation->person->getFullName() }}</td>
							<td>{{ $reservation->room->type }}</td>
							<td>{{ $reservation->start_date }} - {{ $reservation->end_date }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</p>
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
	</div>
</div>
</div>
</div>
@stop