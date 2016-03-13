<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Room extends Model
{
  const TYPE_AFFORDABLE = 'Affordable';
  const TYPE_MIDDLE_CLASS = 'Middle Class';
  const TYPE_VIP = 'V.I.P.';

  const AVAILABILITY_OCCUPIED = 'occupied';
  const AVAILABILITY_VACANT = 'vacant';

  const PRICE_TYPE_AFFORDABLE = 250;
  const PRICE_TYPE_MIDDLE_CLASS = 200;
  const PRICE_TYPE_VIP = 1500;

  protected $table = 'rooms';

  /**
   * Room has many reservations
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function reservations()
  {
    return $this->hasMany('App\Reservation');
  }

  public function currentOccupants() {
    $carbon_now = Carbon::now()->toDateString();
    $currentOccupants = Reservation::where('room_id', $this->id)->where('status', 'accepted')->where('start_date','<=',$carbon_now)->where('end_date','>=',$carbon_now)->count();
    return $currentOccupants;
  }
}
