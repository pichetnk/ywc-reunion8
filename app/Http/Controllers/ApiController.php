<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserDetail;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTeamAll()
    {
      
        $teamA= DB::table('user_details')->select('facebook_id','nikcname','team','group','generation')
                                  ->where('team', 'a')
                                  ->orderBy('generation', 'desc')->get();

        $teamB= DB::table('user_details')->select('facebook_id','nikcname','team','group','generation')
                                  ->where('team', 'b')
                                  ->orderBy('generation', 'desc')->get();

        $teamC= DB::table('user_details')->select('facebook_id','nikcname','team','group','generation')
                                  ->where('team', 'c')
                                  ->orderBy('generation', 'desc')->get();

        $teamD= DB::table('user_details')->select('facebook_id','nikcname','team','group','generation')
                                  ->where('team', 'd')
                                  ->orderBy('generation', 'desc')->get();

       return response()->json([
                'a' => $teamA,
                'b' => $teamB,
                'c' => $teamC,
                'd' => $teamD
            ], 200);

    }


    public function getTeam(Request $request,$team) {

           $listTeam = array('a','b','c','d');

           if (!in_array($team, $listTeam)) {
                return response()->json([
                    'error' => "Bad Request Team name"
                ], 400 );
            }

            $teamMember= DB::table('user_details')->select('facebook_id','nikcname','team','group','generation')
                                  ->where('team', $team)
                                  ->orderBy('generation', 'desc')->get();

           return response()->json($teamMember, 200);                        
    }


    public function userDetail(Request $request){

        $facebook_id = $request->input('facebook_id');
        $nickname = $request->input('nickname');
        $generation = $request->input('generation');
        $joinEvent = $request->input('join_event');
        

        if(!$facebook_id || !$nickname || !$generation  || !$joinEvent ){
              return response()->json([
                    'error' => "Bad Request"
                ], 400 );
        }

        $userDetail = UserDetail::where('facebook_id', $facebook_id)->first();
        if ($userDetail) {
            return response()->json([
                    'error' => "Bad Request this user register Done"
                ], 400 );
        }
        
        $userDetail= UserDetail::create([
            'nikcname'   => $nickname,
            'facebook_id'  => $facebook_id,   
            'team' => 'a',
            'generation' => $generation,
            'join_event' => $joinEvent
        ]);       

        return response()->json($userDetail, 200);         
        
    }



}
