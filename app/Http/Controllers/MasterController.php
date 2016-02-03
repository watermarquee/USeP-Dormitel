<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;

use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function tosend_two()
  {
    return view('tosend.step_two');
  }
}
