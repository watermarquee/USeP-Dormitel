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

  // public function getExcelFile() {

  //   $reservations = Reservation::where('status', Reservation::STATUS_ACCEPTED)->get();
  //   $total_earnings = 0;
  //   $data = [];

  //   foreach ($reservations as $reservation) {

  //       $days = new Carbon($reservation->start_date);
  //       $days = $days->diffInDays(new Carbon($reservation->end_date)); 

  //        if($days == 0) {
  //           $days = 1;
  //       }

  //       $total_price = (int)$days * (float)$reservation->price;
  //       $total_earnings += $total_price;

  //       $all_data[] = [
  //       'person' => $reservation->person->first_name . ' ' . $reservation->person->last_name,
  //       'days' => $days,
  //       'total_price' => $total_price,
  //      ];

  // }
  //   Excel::create('excelfile', function($excel) use ($all_data, $total_earnings, $reservations) {
  //     $excel->sheet('Excel', function($sheet) use ($all_data, $total_earnings, $reservations) {
  //       $sheet->loadView('admin.summary')->with('all_data',$all_data)->with('reservations', $reservations)->with('t_e', $total_earnings);
  //     });
  //   })->export('xls');
  // }
}