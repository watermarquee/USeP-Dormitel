
<h1>Earnings Overview</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Guest</th>
			<th>Days</th>
			<th>Estimate</th>
		</tr>
	</thead>
	<tbody>

		@foreach($all_data as $datum)
		<tr>
			<td>{!! $datum["person"] !!}</td>
			<td>{{ $datum['days'] }}</td>
			<td>Php {{ $datum['total_price'] }}.00</td>
		</tr>
		@endforeach
	</tbody>
</table>
<!-- Total -->
<h3>Current Total Earning Estimate</h3>
<table class="table table-bordered">
	<thead>
		<!-- Footer -->
		<tfoot>
			<tr>
				<th>Estimated Total Sum:</th>
				<th style="color:green;">Php {{ $total_earnings }}.00</th>
			</tr>
		</tfoot>
		<!-- End Footer -->
	</thead>
</table>
			<!-- Total -->