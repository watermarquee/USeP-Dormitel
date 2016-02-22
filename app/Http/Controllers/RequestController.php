<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;

use Illuminate\Http\Request;

class RequestController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function create(Request $request)
  {

    $type = $request->get('type');

    $title = '';

    switch ($type) {
      case Room::TYPE_AFFORDABLE:
        $title = 'Affordable Room';
        break;
      case Room::TYPE_MIDDLE_CLASS:
        $title = 'Middle Class Room';
        break;
      case Room::TYPE_VIP:
        $title = 'V.I.P Room';
        break;
    }

    return view('requests.create')->with('title', $title);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
 public function store(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $email = $request->input('email');
        $country = $request->input('countrySelectBox');
        $number = $request->input('phoneNumber');
        $startdate = $request->input('sdate');
        $enddate = $request->input('edate');


        $title= $fname . ' ' . $lname . ' ' . $address . ' ' .$email . ' ' .$country . ' ' . $number . ' ' . $startdate . ' ' .$enddate;
        //
        return $title;
    }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

}
