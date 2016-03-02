<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  const STATUS_PENDING = 'pending';
  const STATUS_ACCEPTED = 'accepted';
  const STATUS_CANCELLED = 'cancelled';

  protected $table = 'reservations';

  /**
   * A reservation belongs to a room
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function room()
  {
    return $this->belongsTo('App\Room');
  }

  /**x`x`
   * A reservation belongs to a person
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function person()
  {
    return $this->belongsTo('App\Person');
  }
}
