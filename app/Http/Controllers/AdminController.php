<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests;
use App\Reservation;
use App\Http\Controllers\Controller;
use Excel;
use Illuminate\Http\Request;
use App\User;
use Hash;

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

  /**
   * Register user
   *
   * @return {{Any}}
   */
  public function postRegister(Request $request)
  {
    // TODO; check if user is authorized to create another user

    // TODO: check if passwords match

    // Create new user
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));

    if(!$user->save()) {
      // TODO: render error page
    }

    // TODO: add success message
    return redirect('/admin/dashboard');
  }
}
