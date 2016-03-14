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

  /**
   * This function is only showing the link to download the CSV file.
   */
  public function showCSVDataExample() {
      return View::make('csv-demo');
  }
  
  /**
   * This page is actually building the data by running query 
   * and then formatting the data into a CSV file.
   * @return \Illuminate\Http\Response
   */
  public function getCSVLink() {
      // setting the fields that I want to select
      $arrSelectFields = array(
          'c.ContactName', '.ContactTitle', 'c.Address', 'c.City', 'c.Country', 'c.Phone',
          'o.OrderDate', 'o.OrderId'
      );
       
      // query
      $query = Reservation::table('Customers as c');
      $query->select($arrSelectFields);
      $query->join('Orders as o', 'c.CustomerID', '=', 'o.CustomerId', 'left');
      $data = $query->get(); // fetched data
       
      // passing the columns which I want from the result set. Useful when we have not selected required fields
      $arrColumns = array('OrderId', 'ContactName', 'ContactTitle', 'Address', 'City', 'Country', 'Phone', 'OrderDate');
       
      // define the first row which will come as the first row in the csv
      $arrFirstRow = array('Order Id', 'Contact Name', 'Contact Title', 'Address', 'City', 'Country', 'Phone', 'Order Date');
       
      // building the options array
      $options = array(
          'columns' => $arrColumns,
          'firstRow' => $arrFirstRow,
      );
      // creating the Files object from the Utility package.
      $Files = new Files;
      
      return $Files->convertToCSV($data, $options);
  }

}
