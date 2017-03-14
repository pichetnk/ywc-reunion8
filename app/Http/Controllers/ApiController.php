<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserDetail;
use App\User;
use App\OrdersDetail;
use App\Orders;
class ApiController extends Controller
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

   public function getuser(Request $request,$facebookId) {

           if (!$facebookId) {
                return response()->json([
                    'error' => "Bad Request"
                ], 400 );
            }

          
        $user = User::where('facebook_id', $facebookId)->first();

        return response()->json($user, 200);                        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTeamAll()
    {
       
        $teamRed= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'r')
                                  ->orderBy('generation', 'desc')->get();

        $teamBlue= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'b')
                                  ->orderBy('generation', 'desc')->get();

        $teamGreen= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'g')
                                  ->orderBy('generation', 'desc')->get();

        $teamOrange= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'o')
                                  ->orderBy('generation', 'desc')->get();
        $teamYellow= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'y')
                                  ->orderBy('generation', 'desc')->get();
                            

       return response()->json([
                'r' => $teamRed,
                'b' => $teamBlue,
                'g' => $teamGreen,
                'o' => $teamOrange,
                'y' => $teamYellow
            ], 200);

    }


    public function getTeam(Request $request,$team) {

           $listTeam = array('r','b','g','o','y');

           if (!in_array($team, $listTeam)) {
                return response()->json([
                    'error' => "Bad Request Team name"
                ], 400 );
            }

            $teamMember= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', $team)
                                  ->orderBy('generation', 'desc')->get();

           return response()->json($teamMember, 200);                        
    }


    public function register(Request $request){

        $facebook_id = $request->input('facebook_id');
        $nickname = $request->input('nickname');
        $generation = $request->input('generation');
        $joinEvent = $request->input('join_event');
        

        if(!$request->has('facebook_id') || 
           !$request->has('nickname') || 
           !$request->has('generation') || 
           !$request->has('join_event')){
              return response()->json([
                    'error' => "Bad Request",
                    'error_code' => "00"
                ], 200 );
        }

        $userDetail = UserDetail::where('facebook_id', $facebook_id)->first();
        if ($userDetail) {
            return response()->json([
                    'error' => "Bad Request this user register Done",
                    'error_code' => "01"
                ], 200 );
        }
        
     
      //  $team = $this->randomTeam();
        $userDetail= UserDetail::create([
            'nickname'   => $nickname,
            'facebook_id'  => $facebook_id,   
            'team' => $this->randomTeam($generation),
            'generation' => $generation,
            'join_event' => $joinEvent
        ]);       
    
        

        return response()->json($userDetail, 200);         
        
    }


    public function createOrder(Request $request){
        
        $orderList = $request->input('order');
        $facebook_id = $request->input('facebook_id');
        $receive_type = $request->input('receive_type');
        $address = $request->input('address','');

        $provice = $request->input('provice','');
        $zip_code = $request->input('zip_code','');
       

        if(!$facebook_id || !$receive_type || !$orderList ){
              return response()->json([
                    'error' => "Bad Request"
                ], 400 );
        }

        if($receive_type=='zip' && (!$address || !$provice ||!$zip_code)){
              return response()->json([
                    'error' => "Bad Request"
                ], 400 );
        }
       
        $orders = Orders::where('facebook_id', $facebook_id)->first();
        $orders= Orders::create([                          
                            'facebook_id'  => $facebook_id,   
                            'receive_type' => $receive_type,
                            'address' => $address,
                            'provice' => $provice,
                            'zip_code' => $zip_code
                        ]);    

      foreach( $orderList as $obj) {
        //echo  $obj['productCode'] .  $obj['size'] . $obj['aaa']     ;
        $productCode = array_key_exists ( 'productCode' , $obj) ?$obj['productCode']  : '';
        $size = array_key_exists ( 'size' , $obj) ?$obj['size']  : '';
        $amount = array_key_exists( 'amount' , $obj) ?$obj['amount']  : 0;

         OrdersDetail::create([                          
                            'facebook_id'  => $facebook_id,   
                            'product_code' => $productCode,
                            'size' => $size,
                            'amount' => $amount,
                            'orders_id'=> $orders->id
            ]);  


       }



    
      return response()->json($orders, 200 );

       

    }


    private function randomTeam($generation){
        $count = array('r'=>0,'b'=>0,'g'=>0,'o'=>0,'y'=>0);
        $teams = array('r'=>5,'b'=>5,'g'=>5,'o'=>5,'y'=>5);
        $myTeam ="";
        $sumCount =0;

        if($generation==0){
                $countTeamGenetation=DB::table('user_details')
                                    ->select(DB::raw('team , count(*) as teamCount')) 
                                    ->where('generation', '=', '0')
                                    ->groupBy('team') ->get();
                foreach ($countTeamGenetation as $obj) {
                    $count[$obj->team]= $obj->teamCount;                 
                }

                asort($count);
                $checkEqu =0;
                $randomArray = array();
                foreach ($count as $key => $value) {
                    if($checkEqu == $value || $checkEqu == $value -1){
                        array_push($randomArray,$key);
                    }
                    $checkEqu = $value;
                }
                $myTeam = $randomArray[mt_rand(0, count($randomArray) - 1)];
                return $myTeam;    
        }



        $count = array('r'=>0,'b'=>0,'g'=>0,'o'=>0,'y'=>0);
        $countTeamObj=DB::table('user_details')->select(DB::raw('team , count(*) as teamCount')) ->groupBy('team') ->get();
        
        foreach ($countTeamObj as $obj) {
         
            $count[$obj->team]= $obj->teamCount;
            $sumCount += $obj->teamCount;
        }

        foreach ($teams as $team=>$value) {
            $teams[$team] = (($sumCount+1-$count[$team])/($sumCount+1)/4)*25;
        }
          
        $tempTeam = array();
        foreach ($teams as $team=>$value)   {
                $tempTeam = array_merge($tempTeam, array_fill(0, $value, $team));
        }

        $myTeam = $tempTeam[array_rand($tempTeam)];
        
        return $myTeam;
    }





}
