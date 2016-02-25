<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  const STATUS_PENDING = 'pending';
  const STATUS_ACCEPTED = 'accepted';
  const STATUS_REJECTED = 'rejected';

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

  /**
   * A reservation belongs to a person
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function person()
  {
    return $this->belongsTo('App\Person');
  }

  public function generateUniqueId()
  {
    $uniqueId = 'DORM';
    $rem = 7 - strlen($this->id);
    for($i=0; $i<$rem; $i0++){
      $uniqueId .= '0';
    }
    $uniqueId .= $this->id;
    return $uniqueId;
  }

}
