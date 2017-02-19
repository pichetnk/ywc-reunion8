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





}
