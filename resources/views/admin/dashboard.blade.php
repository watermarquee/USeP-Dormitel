@extends('admin.master')
@section('content')
        <!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reservations</h1>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Room #</th>
                        <th>Room Type</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>04/11/12</td>
                        <td>Jenny West</td>
                        <td>Zen Room #2</td>
                        <td>VIP Room</td>
                        <td>$300.00</td>
                    </tr>
                    <tr>
                        <td>13/11/16</td>
                        <td>John Doe</td>
                        <td>R101</td>
                        <td>Affordable Room</td>
                        <td>$10.00</td>
                    </tr>
                    <tr>
                        <td>02/14/16</td>
                        <td>Princess Love Mark</td>
                        <td>D69</td>
                        <td>VIP Room</td>
                        <td>$1020.36</td>
                    </tr>
                    <tr>
                        <td>01/01/13</td>
                        <td>Tom Hanks</td>
                        <td>The Vault #3</td>
                        <td>VIP Room</td>
                        <td>$440.00</td>
                    </tr>
                    <tr>
                        <td>12/12/12</td>
                        <td>John Morrison</td>
                        <td>A-34</td>
                        <td>Middle Class Room</td>
                        <td>$100.00</td>
                    </tr>
                    </tbody>
                </table>
                </p>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
@stop