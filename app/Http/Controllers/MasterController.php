<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MasterController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function rooms()
	{
		return view('rooms');
	}

	public function affordable()
	{
		return view('quarters.affordable');
	}

	public function middleclass()
	{
		return view('quarters.middleclass');
	}

	public function vip()
	{
		return view('quarters.vip');
	}

	public function dashboard()
	{
		return view('reservation.reservationdash');
	}


}
