@extends('admin.master')
@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
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
							<td>{{ $datum['person'] }}</td>
							<td>{{ $datum['days'] }}</td>
							<td>Php {{ $datum['total_price'] }}.00</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</p>
			<!-- Total -->
		<h3>Current Total Earning Estimate</h3>
		<table class="table table-bordered">
					<thead>
		       				<!-- Footer -->
							 <tfoot>
							    <tr>
							      <th>Estimated Total Sum:</th>
							      <th style="color:green;">Php {{ $t_e }}.00</th>
							    </tr>
							  </tfoot>
							  <!-- End Footer -->
					</thead>
			</table>
			<!-- Total -->
	</div>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-left:15px;">Hide Menu</a>
</div>
</div>
</div>
@stop