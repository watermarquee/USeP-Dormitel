<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Room;
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
  public function checkAvailability()
  {
    //TODO add params start_date, end_date

    $rooms = Room::all();

    $accepted_rooms = [];
    foreach ($rooms as $room) {

      $reservations = $room->reservations;
      if (count($reservations) != 0) {
        foreach ($reservations as $reservation) {
          //TODO check availability

          $reservation_start_date = $reservation->start_date;
          $reservation_end_date   = $reservation->end_date;

          $hit = false; //TODO Hardcoded for now

          if (!$hit) {
            $accepted_rooms[] = $room;
          }
        }
      } else {
        $accepted_rooms[] = $room;
      }
    }

    // Sort by type

    $affordable  = 0;
    $middleClass = 0;
    $vip         = 0;

    foreach ($accepted_rooms as $room) {
      switch ($room->type) {
        case Room::TYPE_AFFORDABLE:
          $affordable++;
          break;
        case Room::TYPE_MIDDLE_CLASS:
          $middleClass++;
          break;
        case Room::TYPE_VIP:
          $vip++;
          break;
      }
    }
        
    return view('rooms.results')->with([

      'affordable' => $affordable,
      'middleClass' => $middleClass,
      'vip' => $vip

      ]);
  }
}
