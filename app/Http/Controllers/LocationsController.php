<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function home()
    {
        $locations = Location::orderBy('location_name','asc')->paginate(10);
        return view('locations.locations',compact('locations'));
    }

    public function AddLocation(Request $request)
    {
       $request->validate([
           'location_name'=> 'required|unique:locations'
       ]);

       Location::create([
           'location_name'=>ucfirst($request->location_name)
       ])->save();

       return redirect(route('location-home'))->with('message','location created');

    }

    public function editLocation(Request $request,$id)
    {
        $request->validate([
            'location_name_update'=> 'required|unique:locations,location_name,'.$id
        ]);

        $location = Location::findOrFail($id);
        $location->update([
            'location_name'=>$request->location_name_update
        ]);
       
        return redirect(route('location-home'))->with('message','location updated');
       
    }
    public function deleteLocation($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect(route('location-home'))->with('message',$location->location_name.' was removed from locations list');
       
    }

}
