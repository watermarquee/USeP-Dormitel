<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

  /**
   * Render page based on selected room type
   */
  public function page($type)
  {
    $title    = '';
    $imageUrl = '';

    switch ($type) {
      case Room::TYPE_AFFORDABLE:
        $title    = 'Affordable Room';
        $imageUrl = 'affordable2.jpg';
        break;
      case Room::TYPE_MIDDLE_CLASS:
        $title    = 'Middle Class Room';
        $imageUrl = 'middleclass2.jpg';
        break;
      case Room::TYPE_VIP:
        $title    = 'V.I.P Room';
        $imageUrl = 'vip2.jpg';
        break;
    }

    $rooms = Room::where('type', $type)->where('availability', Room::AVAILABILITY_VACANT)->get();

    return view('rooms.page')->with('title', $title)->with('imageUrl', $imageUrl)->with('pageName', $type)->with('rooms', $rooms);

  }

  /**
   * Check available rooms
   *
   * @return array
   */
  public function checkAvailability(Request $request)
  {
    //add params start_date, end_date
    $input = $request->all();

    $rooms = Room::all();
    $check_date = Reservation::whereBetween('start_date',[$input['start_date'], $input['end_date']])->get();
    return view('welcome')->with(compact('check_date', 'input'));
  }
}
