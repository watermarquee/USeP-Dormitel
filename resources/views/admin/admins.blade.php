@extends('admin.master')
@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>ADMINISTRATORS</h1>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>e-Mail</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					@foreach($admins as $admin)
						<tr>
							<td>{{ $admin->name }}</td>
							<td>{{ $admin->email }}</td>
							<td>
								{!! Form::open(['method'=>'DELETE', 'route'=>['admin.delete',$admin->id]]) !!}
				                    <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</button>
				                {!! Form::close() !!}
							</td>
						</tr>
					</form>
					@endforeach
				</tbody>
			</table>
		</p>
		<?php echo $admins->render();?>
	</div>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-left:15px;">Hide Menu</a>
</div>
</div>
</div>
@stop