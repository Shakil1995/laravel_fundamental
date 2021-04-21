<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
//     public function __invoke(){
//  return "i am single controller ";
//     }
function mySelf(){
    return " I am Custom Controller";
}

function yourSelf(){
    return " I am Custom Controller";
}

}
