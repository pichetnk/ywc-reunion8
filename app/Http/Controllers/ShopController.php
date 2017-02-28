<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\User;
use Auth;
class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function shop()
    {
         return view('shop' );
    }
    public function Order()
    {

    }
}
