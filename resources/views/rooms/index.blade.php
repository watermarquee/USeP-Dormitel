@extends('master')
@section('tummy')
    @include('rooms.partials.header')
    <style type="text/css" media="screen">
        .contentment {
            padding: 50px 290px;
            text-align: center;
        }

        img {
            object-fit: cover;
        }

        .rooms-table tr {
            cursor: pointer;
        }

    </style>
    <div class="contentment">
        <table class="table table-hover rooms-table">
            <tbody>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_AFFORDABLE}}';">
                <th scope="row"></th>
                <td><img src="/images/affordable1.jpg" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>Small Room</h1>

                    <p style="text-align:justify;text-justify:inter-word">Beautiful Small Room with a max capacity
                    of five(5) persons; four(4) small rooms available.</p>
                </td>
                <td><img src="/images/affordable2.jpg" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_MIDDLE_CLASS}}';">
                <th scope="row"></th>
                <td><img src="/images/middleclass1.jpg" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>Big Room</h1>

                    <p style="text-align:justify;text-justify:inter-word">Beautiful Big Room with a max capacity
                    of ten(10) persons; eight(8) big rooms available.</p>
                </td>
                <td><img src="/images/middleclass2.jpg" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            <tr onclick="document.location = '/rooms/page/{{\App\Room::TYPE_VIP}}';">
                <th scope="row"></th>
                <td><img src="/images/vip1.jpg" vspace="22px" hspace="15px"
                         style="width:150px;height:150px;border:0;"></td>
                <td><h1>V.I.P.</h1>

                    <p style="text-align:justify;text-justify:inter-word">A beautiful room and only one of its
                    kind, reserved for people of high regards, max capacity of two(2) persons.</p>
                </td>
                <td>
                    <img src="/images/vip2.jpg" vspace="22px"
                         style="width:150px;height:150px;border:0;"></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop