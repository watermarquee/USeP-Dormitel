<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use App\Room;
use App\Reservation;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('rooms.index');
  }

  public function page($type) {
    $title    = '';
    $imageUrl = '';

    switch ($type) {
      case Room::TYPE_AFFORDABLE:
        $title    = 'Small Room';
        $imageUrl = 'affordable2.jpg';
        $px       = '5';
        break;
      case Room::TYPE_MIDDLE_CLASS:
        $title    = 'Big Room';
        $imageUrl = 'middleclass2.jpg';
        $px       = '10';
        break;
      case Room::TYPE_VIP:
        $title    = 'V.I.P';
        $imageUrl = 'vip2.jpg';
        $px       = '2';
        break;
    }

    $rooms = Room::where('type', $type)->where('availability', Room::AVAILABILITY_VACANT)->get();

    return view('rooms.page')->with('title', $title)->with('imageUrl', $imageUrl)->with('px', $px)->with('pageName', $type)->with('rooms', $rooms);

  }

  /**
   * Check available rooms
   *
   * @return array
   */
  public function checkAvailability(Request $request) {
    //add params start_date, end_date
    //Start date_input
    $input = $request->all();
    $currentOccupants = [];
    $rooms = Room::all();
    $check_date = Reservation::whereBetween('start_date',[$input['start_date'], $input['end_date']])->get();
    foreach ($rooms as $index => $room) {
      # code...
      $currentOccupants[$index] = Reservation::where('room_id',$room->id)
                                   ->where('status', 'accepted')
                                   ->where('start_date','<=',[$input['start_date']])
                                   ->where('end_date','>=',[$input['end_date']])->count();
    }
    // //EOF date_input

    //display all_table
    $all_table = Room::where('availability', 'vacant')->get();
    // return view('welcome')->with('table',$table);
    return view('welcome')->with(compact('check_date', 'input', 'all_table', 'currentOccupants'));
  }
}
