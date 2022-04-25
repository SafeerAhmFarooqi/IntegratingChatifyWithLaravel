<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
       public function index()
    { 
      
        $location= Location::all();
        return view('Admin.locations_list',compact('location'));
    }

       public function create()
    {
        return view('Admin.add_location');
    }

     public function store(Request $request)
    {
      	$location= new Location;

    	$location->location=$request->location;
    	$location->save();

    	return redirect('Admin/locations');
    }

     public function edit($id)
    {
        $location=Location::where('id',$id)->first();

      return view('Admin.edit_location', compact('location'));
    }

     public function update(Request $request,$id)
    {
        $location=Location::where('id',$id)->update([
            'location'=>$request->location,
        ]);
      return redirect('Admin/locations');
    }

     public function destroy($id)
    {
        $member = Location::where('id',$id)->delete();
        return redirect('Admin/locations');
    }
}
