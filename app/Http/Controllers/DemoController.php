<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function myName($firstName,$middleName,$lastName){
      return view('Demo',[ 'firstKey'=>$firstName,'middleKey'=>$middleName,'lastkey'=>$lastName]);
    }
}
