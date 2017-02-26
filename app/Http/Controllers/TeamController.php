<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\User;
use Auth;
class TeamController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
       $userDetail= UserDetail::where('facebook_id',Auth::user()->facebook_id)->first();
       if(!$userDetail) {
              return redirect()->route('register');
       }

      
      $teamImg="";
      if($userDetail->team=='b') {
            $teamImg="team_blue";
      }else if($userDetail->team=='g'){
             $teamImg="team_green";
      }else if($userDetail->team=='o'){
             $teamImg="team_orange";
      }else if($userDetail->team=='r'){
             $teamImg="team_red";
      }else if($userDetail->team=='y'){
             $teamImg="team_yellow";
      } 
      return view('profile' , ['user'=>Auth::user(), 'userDetail' => $userDetail,'teamImg'=>$teamImg] );


      
       
    }


    public function team()
    {

    }
}
