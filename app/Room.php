<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Room extends Model
{
  const TYPE_AFFORDABLE = 'Small Room';
  const TYPE_MIDDLE_CLASS = 'Big Room';
  const TYPE_VIP = 'V.I.P.';

  const AVAILABILITY_OCCUPIED = 'occupied';
  const AVAILABILITY_VACANT = 'vacant';

  const PRICE_TYPE_AFFORDABLE = 250;
  const PRICE_TYPE_MIDDLE_CLASS = 200;
  const PRICE_TYPE_VIP = 500;

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
}
