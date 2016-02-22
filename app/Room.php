<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  const TYPE_AFFORDABLE = 'affordable';
  const TYPE_MIDDLE_CLASS = 'middleClass';
  const TYPE_VIP = 'vip';

  const AVAILABILITY_OCCUPIED = 'occupied';
  const AVAILABILITY_VACANT = 'vacant';

  const PRICE_TYPE_AFFORDABLE = 500;
  const PRICE_TYPE_MIDDLE_CLASS = 1000;
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
}
