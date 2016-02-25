<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Person;
use App\Reservation;
use App\Room;

use Illuminate\Http\Request;

class ReservationController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function create(Request $request)
  {

    $type = $request->get('type');

    $title = '';

    switch ($type) {
      case Room::TYPE_AFFORDABLE:
        $title = 'Affordable Room';
        break;
      case Room::TYPE_MIDDLE_CLASS:
        $title = 'Middle Class Room';
        break;
      case Room::TYPE_VIP:
        $title = 'V.I.P Room';
        break;
    }

    return view('reservations.create')->with('title', $title);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $person             = new Person();
    $person->first_name = $request->input('first_name');
    $person->last_name  = $request->input('last_name');
    $person->address    = $request->input('address');
    $person->email      = $request->input('email');
    $person->phone      = $request->input('phone');

    if ($person->save()) {
      $reservation             = new Reservation();
      $reservation->person_id  = $person->id;
      $reservation->status     = Reservation::STATUS_PENDING;
      $reservation->price      = 1000; //TODO Hardcoded for now
      $reservation->notes      = $request->input('notes');
      $reservation->start_date = $request->input('start_date');
      $reservation->end_date   = $request->input('end_date');
      
      $reservation->room_id    = 1; //TODO Hardcoded for now
      if ($reservation->save()) {
        return 'Success';
        //TODO redirect to a page with success message
      } else {
        return 'Fail reservation';
        //TODO redirect to a page with error message
      }
    } else {
      return 'Fail Person';
      //TODO redirect to a page with error message
    }
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

}
