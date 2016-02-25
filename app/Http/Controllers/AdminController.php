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
    return view('admin.dashboard');
  }

  public function upcoming() 
  {
    $reservations = Reservation::where('status', 'pending')->get();

    return view('admin.upcoming')->with(compact('reservations'));
  }
}
