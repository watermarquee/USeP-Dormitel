<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Reservation;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display dasboard
   *
   * @return Response
   */

  public function index() 
  {
    $reservations = Reservation::where('status', 'pending')->get();

    return view('admin.latest')->with(compact('reservations'));
  }

  public function confirmed() {
    $reservations = Reservation::where('status', 'accepted')->get();

    return view('admin.confirmed')->with(compact('reservations'));
  }

   public function cancelled() {
    $reservations = Reservation::where('status', 'cancelled')->get();

    return view('admin.cancelled')->with(compact('reservations'));
  }
  public function finished() {
    $reservations = Reservation::where('status', 'done')->get();

    return view('admin.finished')->with(compact('reservations'));
  }
}
