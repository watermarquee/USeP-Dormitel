<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Person;
use App\Reservation;
use App\Room;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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

    $type    = $request->get('type');
    $room_id = $request->get('room_id');

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

    return view('reservations.create')->with('title', $title)->with('room_id', $room_id);
  }

  public static function quickRandom($length = 8) {
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $person             = new Person();
    $person->unique_id  = $this->quickRandom();
    $person->first_name = $request->input('first_name');
    $person->last_name  = $request->input('last_name');
    $person->address    = $request->input('address');
    $person->email      = $request->input('email');
    $person->phone      = $request->input('phone');

    if ($person->save()) {
      $reservation             = new Reservation();
      $reservation->person_id  = $person->id;
      $reservation->status     = Reservation::STATUS_PENDING;
      $reservation->price      = Room::find((int)$request->input('room_id'))->price;
      $reservation->notes      = $request->input('notes');
      $reservation->start_date = $request->input('start_date');
      $reservation->end_date   = $request->input('end_date');

      $reservation->room_id = (int)$request->input('room_id');
      if ($reservation->save()) {
        return view('confirmation');
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

  public function confirm($id) {
    $confirm = Reservation::find($id);
    $confirm->status = Reservation::STATUS_ACCEPTED;
    $confirm->save();
    $room = $confirm->room;
    $room->occupants=$room->occupants+1;
    $room->save();
    //Send mail
    $reservations = Reservation::where('status', 'accepted')->get();
    Mail::send('emails.mail_confirmed', ['reservation' => $confirm], function($message) use ($confirm) {
      $message->to($confirm->person->email, $confirm->person->first_name)->subject('USeP Dormitel Reservation Details');
    });
    return redirect('admin/dashboard');
  }

  public function cancelled($id) {
    $cancel = Reservation::find($id);
    $cancel->status = Reservation::STATUS_CANCELLED;
    $cancel->save();
    //Send mail
    Mail::send('emails.mail_declined', ['reservation' => $cancel], function($message) use ($cancel) {
      $message->to($cancel->person->email, $cancel->person->first_name)->subject('USeP Dormitel Reservation Details');
    });
    return redirect('admin/dashboard');
  }

  public function finished($id) {
    $done = Reservation::find($id);
    $done->status = Reservation::STATUS_DONE;
    $done->save();
    return redirect('admin/dashboard');
  }

  public function summary() {

    $reservations = Reservation::where('status', Reservation::STATUS_ACCEPTED)->get();

    $total_earnings = 0;
 
    $data = [];

    foreach ($reservations as $reservation) {

        $days = new Carbon($reservation->start_date);
        $days = $days->diffInDays(new Carbon($reservation->end_date)); 

        $total_price = (int)$days * (float)$reservation->price;
        $total_earnings += $total_price;
    } 
      $reservations = Reservation::where('status', Reservation::STATUS_ACCEPTED)->paginate(10);

    $data = [];

    foreach ($reservations as $reservation) {

        $days = new Carbon($reservation->start_date);
        $days = $days->diffInDays(new Carbon($reservation->end_date)); 

        $total_price = (int)$days * (float)$reservation->price;
        $all_data[] = [
          'person' => $reservation->person->first_name . ' ' . $reservation->person->last_name,
          'days' => $days,
          'total_price' => $total_price,
        ];
    } 
    return view('admin.summary')->with('all_data',$all_data)->with('reservations', $reservations)->with('t_e', $total_earnings);
  }
}
