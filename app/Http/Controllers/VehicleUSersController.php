<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\VehicleUser;
use Illuminate\Http\Request;

class VehicleUSersController extends Controller
{
    public function home()
    {
        $vusers = VehicleUser::orderBy('fullname','asc')->paginate(10);
        $locations = Location::pluck('location_name','id')->prepend('Select Location','');
        return view('vehicle_users.home',compact('vusers','locations'));
    }

    public function createvuser(Request $request)
    {
        $request->validate([
            'fullname'=>'required|unique:vehicle_users,fullname',
            'location'=> 'required|exists:locations,id'
        ]);

         VehicleUser::create([
            'fullname'=> $request->fullname,
            'location_id'=> $request->location
        ]);
        return redirect(route('vuser-home'))->with('message','Vechicle user created..');
    }

    public function editvuser($id,Request $request)
    {
      $request->validate([
          'fullname_update'=> 'required|unique:vehicle_users,fullname,'.$id,
          'location_update'=>'required|exists:locations,id'
      ]);
      $vuser = VehicleUser::findOrFail($id);
      $vuser->update([
          'fullname'=>$request->fullname_update
      ]);

      return redirect(route('vuser-home'))->with('message','Vehicle user updated...');

    }

    public function deletevuser($id)
    {
        $vuser = VehicleUser::findOrFail($id);
        $vuser->delete();
        return redirect(route('vuser-home'))->with('message',$vuser->fullname.' was removed from locations list');
    }
}
