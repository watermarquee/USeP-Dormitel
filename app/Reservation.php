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

  /**x`x`
   * A reservation belongs to a person
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function person()
  {
    return $this->belongsTo('App\Person');
  }

  // public static function quickRandom($length = 8) {
  //   $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  //   return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
  // }

    /**
    * 
    * Generate v4 UUID
    * 
    * Version 4 UUIDs are pseudo-random.
    */
    public static function v4() {

    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

    // 32 bits for "time_low"
    mt_rand(0, 0xffff), mt_rand(0, 0xffff),

    // 16 bits for "time_mid"
    mt_rand(0, 0xffff),

    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand(0, 0x0fff) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand(0, 0x3fff) | 0x8000,

    // 48 bits for "node"
    mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
  }
}
