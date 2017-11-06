<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
   public function send(){
       return "hello";
   }
}
