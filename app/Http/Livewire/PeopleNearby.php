<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PeopleNearby extends Component
{

    public $currentUserLongitude=0;
    public $currentUserLatiitude=0;
    public $differenceKm=0;

    public function render()
    {
        $users=User::where('id','!=',Auth::user()->id)
        ->orderBy('created_at','desc')
        ->get();
        $this->updateCurrentUserLocation();
        return view('livewire.people-nearby',[
            'users'=>$users,
        ]);
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('getLocation');
    }

    public function getKmAway($longitude,$latitude)
    {
        $mylat=$this->currentUserLatiitude;
        $mylong=$this->currentUserLongitude;
        
        $pi80 = M_PI / 180;
          $mylat *= $pi80;
          $mylat1=$mylat;
            $mylong *= $pi80;
            $mylong1 =$mylong;
         
            $userlat= $latitude;
        
         $userlon=$longitude;
           
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
            return (int)$km = $r * $c;
    }

    public function updateCurrentUserLocation()
    {
        $user=User::find(Auth::user()->id);
        if(Auth::user()->longitude!=$this->currentUserLongitude || Auth::user()->latitude!=$this->currentUserLatiitude)
        {
               $user->longitude=$this->currentUserLongitude;
               $user->latitude=$this->currentUserLatiitude;
               $user->update();
        }
        
    }
}
