<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 登录页面
     * @return Response
     */
    public function index(Request $request)
    {
       $text = $request->input('text');
       return Response()->json(['code'=>$text]);
    }
    
}