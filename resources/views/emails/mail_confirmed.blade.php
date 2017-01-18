<div class="mail">
	<h1>You reservation is confirmed!</h1>
	<h2>Details</h2>
	<div>Reservation ID: {{ $reservation->person->getUNiqueID() }}</div>
	<div>Name: {{ $reservation->person->getFullName() }}</div>
	<div>Address: {{ $reservation->person->address }}</div>
	<div>Email: {{ $reservation->person->email }}</div>
	<div>Contact: {{ $reservation->person->phone }}</div>
	<div>Room Type: {{ $reservation->room->type }}</div>
	<div>Room #: {{ $reservation->room->name }}</div>
	<div>Rental Time: {{ $reservation->start_date }} — {{ $reservation->end_date }}</div>
	<div>Notes: {{ $reservation->notes }}</div>
</div>