@extends('master')
@section('tummy')
    @include('rooms.partials.header')
	<div class="container">
		
	<table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Affordable Room's Availability</th>
                                <th>Middle Class Room's Availability</th>
                                <th>V.I.P. Room's Availability</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
               
                                <tr>
                                    <td>{{ $affordable }}</td>
                                    <td>{{ $middleClass }}</td>
                                    <th>{{ $vip }}</th>
                                    <td></td>
                                </tr>
                         
                            </tbody>
                        </table>
	</div>
@stop