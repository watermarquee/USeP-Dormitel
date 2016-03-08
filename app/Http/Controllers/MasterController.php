<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;
use App\Reservation;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function tosend_two()
  {
    return view('tosend.step_two');
  }

  public function cronTest() {
  	$reservations = Reservation::where('end_date', '<', Carbon::now())->where('status',Reservation::STATUS_ACCEPTED)->get();

    foreach ($reservations as $reservation) {
    	$reservation->status = Reservation::STATUS_DONE;
    	if($reservation->save()) {
    		$room = $reservation->room;
    		$count = (int)$room->occupants - 1;
    		$count = $count > 0 ? $count : 0;
    		$room->occupants = $count;
    		if($room->save()) {
    			return 'success';
    		} else {
    			return 'error room';
    		}
    	} else  {
    		return 'error reservation';
    	}
    }
  }
}
