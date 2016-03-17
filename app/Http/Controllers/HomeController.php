<?php namespace App\Http\Controllers;

use utilies\src\Files;

class HomeController extends Controller
{

  /*
  |--------------------------------------------------------------------------
  | Home Controller
  |--------------------------------------------------------------------------
  |
  | This controller renders your application's "dashboard" for users that
  | are authenticated. Of course, you are free to change or remove the
  | controller as you wish. It is just here to get your app started!
  |
  */

  protected $mailer;

  function _construct(MailQueue $mailer) {
    $this->mailer = $mailer;
  }

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index() {
    return view('welcome');
  }
}
