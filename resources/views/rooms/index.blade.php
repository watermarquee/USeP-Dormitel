@extends('master')
@section('tummy')
    @include('rooms.partials.header')
    <style type="text/css" media="screen">

        .contentment {
            padding: 50px 290px;
            text-align: center;
            height: 100vh;
        }

    </style>
    <div class="contentment">
        <table class="table table-hover">
            <tbody>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_AFFORDABLE}}';">
                <th scope="row"></th>
                <td><img src="images/dummy.gif" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>Affordable Room</h1>

                    <p style="text-align:justify;text-justify:inter-word">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Laboriosam consectetur,
                        tempore vel aperiam ab iure id, officia mollitia nesciunt quisquam, dolore
                        doloremque. Possimus consequuntur
                        delectus facilis perspiciatis minima, repellat recusandae?</p>
                </td>
                <td><img src="images/dummy.gif" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_MIDDLE_CLASS}}';">
                <th scope="row"></th>
                <td><img src="images/dummy.gif" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>Middle Class Room</h1>

                    <p style="text-align:justify;text-justify:inter-word">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Laboriosam consectetur,
                        tempore vel aperiam ab iure id, officia mollitia nesciunt quisquam, dolore
                        doloremque. Possimus consequuntur
                        delectus facilis perspiciatis minima, repellat recusandae?</p>
                </td>
                <td><img src="images/dummy.gif" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_VIP}}';">
                <th scope="row"></th>
                <td><img src="images/dummy.gif" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>V.I.P. Room</h1>

                    <p style="text-align:justify;text-justify:inter-word">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Laboriosam consectetur,
                        tempore vel aperiam ab iure id, officia mollitia nesciunt quisquam, dolore
                        doloremque. Possimus consequuntur
                        delectus facilis perspiciatis minima, repellat recusandae?</p>
                </td>
                <td>
                    <img src="images/dummy.gif" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop