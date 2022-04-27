<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PeopleNearbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {       
            $login_user=Auth::user()->id;
            $users=User::where('id','!=',$login_user)->get();



           //  $lng = Auth::user()->longitude;   
           //  $lat =Auth::user()->latitude;  
           //  $careType = 1;
           //  $distance = 3;

           //  $data="";

           // $data .= DB::table('users AS S', 'users AS U')
                        
           //      ->selectRaw("
           //              ( FLOOR(6371 * ACOS( COS( RADIANS( '$lat' ) ) * COS( RADIANS( S.latitude ) ) * COS( RADIANS( S.longitude ) - RADIANS( '$lng' ) ) + SIN( RADIANS( '$lat' ) ) * SIN( RADIANS( S.latitude ) ) )) ) distance")
           //      ->havingRaw("distance < 25")
           //      ->where('id', '!=',$login_user)
           //      ->get();

           //      $data.=$users;


       // return view('people_nearby', compact('users'));
       return view('people-nearby-livewire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


         // $lng = '67.0615975';   
         //    $lat ='24.8923235';  
         //    $careType = 1;
         //    $distance = 3;

         //   $data = DB::table('users AS S')
         //        ->selectRaw("
         //                ( FLOOR(6371 * ACOS( COS( RADIANS( '$lat' ) ) * COS( RADIANS( S.latitude ) ) * COS( RADIANS( S.longitude ) - RADIANS( '$lng' ) ) + SIN( RADIANS( '$lat' ) ) * SIN( RADIANS( S.latitude ) ) )) ) distance")
         //        ->havingRaw("distance < 25")
         //        ->get();
         //        return $data;


// $latitudeFrom = '24.8923235';
// $longitudeFrom = '67.0615975';

// $latitudeTo = '25.408388';
// $longitudeTo = '68.260578';

// //Calculate distance from latitude and longitude
// $theta = $longitudeFrom - $longitudeTo;
// $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
// $dist = acos($dist);
// $dist = rad2deg($dist);
// $miles = $dist * 60 * 1.1515;

// $distance = ($miles * 1.609344).' km';
// return $distance;

$mylat='24.8923235';
$mylong='67.0615975';

$pi80 = M_PI / 180;
  $mylat *= $pi80;
  $mylat1=$mylat;
    $mylong *= $pi80;
    $mylong1 =$mylong;
 
    $userlat= '25.408388';

 $userlon='68.260578';
   
 $mylat;
   $mylong;
   


    $userlat *= $pi80;
    $userlon *= $pi80;
error_reporting(0);
ini_set('display_errors', 0);

    $r = 6372.797; 
    $dlat = $userlat - $mylat1;
    $dlon = $userlon - $mylong1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($mylat1) * cos($userlat) * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
     $GLOBALS['km'] = (int)$km = $r * $c;
   return $GLOBALS['km'] = $km; 

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $userlogin=Auth::user()->id;
        
        User::where('id',$userlogin)->update([
            'long'=>$request->post('long'),
            'lat'=>$request->post('lat'),

        ]);
        

         return["msg"=>"Post Submitted It Take 5 - 10 Seconds for Appear ! "];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
