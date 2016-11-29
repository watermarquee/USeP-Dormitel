<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests;
use App\Reservation;
use App\Http\Controllers\Controller;
use Excel;
use Illuminate\Http\Request;

class AdminController extends Controller {

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
    $reservations = Reservation::where('status', 'pending')->paginate(15);

    return view('admin.latest')->with(compact('reservations'));
  }
  public function confirmed() {
    $reservations = Reservation::where('status', 'accepted')->paginate(10);

    return view('admin.confirmed')->with(compact('reservations'));
  }
   public function cancelled() {
    $reservations = Reservation::where('status', 'cancelled')->paginate(10);

    return view('admin.cancelled')->with(compact('reservations'));
  }
  public function finished() {
    $reservations = Reservation::where('status', 'done')->paginate(10);

    return view('admin.finished')->with(compact('reservations'));
  }
  public function addmins() {
    return view('admin.adminindex');
  }
}