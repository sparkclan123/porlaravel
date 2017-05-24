<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 *
 */
class MovieController extends Controller
{

  function __construct()
  {
    # code...
  }


public  function index(){
return "hello MovieController";
}


public function band()
{
$this->data = array(
'tor' => 'Poooooooooooooooooor',
'movie' => 'black'

);
return view('movie/band', $this->data);
}




}







 ?>
