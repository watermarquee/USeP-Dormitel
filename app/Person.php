<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $table = 'persons';

  /**
   * Person's reservation
   */
  public function reservation()
  {
    return $this->hasOne('App\Reservation');
  }

  public function getFullName()
  {
  	return $this->first_name.' '.$this->last_name;
  }
}
