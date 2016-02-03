<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;

use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function tosend($pageName)
	{
		$title    = '';
    $imageUrl = '';

    switch ($pageName) {
      case Room::TYPE_AFFORDABLE:
        $title    = 'Affordable Room';
        $imageUrl = 'affordable2.jpg';
        break;
      case Room::TYPE_MIDDLE_CLASS:
        $title    = 'Middle Class Room';
        $imageUrl = 'middleclass2.jpg';
        break;
      case Room::TYPE_VIP:
        $title    = 'V.I.P Room';
        $imageUrl = 'vip2.jpg';
        break;
    }

		return view('tosend.step_one')->with('title', $title);
	}
  public function tosend_two()
  {
    return view('tosend.step_two');
  }
}
