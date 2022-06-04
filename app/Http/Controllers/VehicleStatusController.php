<?php

namespace App\Http\Controllers;

use App\Models\VehicleStatus;
use Illuminate\Http\Request;

class VehicleStatusController extends Controller
{
    public function home()
    {
        $vstatuses = VehicleStatus::orderBy('status','asc')->paginate(10);
        return view('vehicle_statuses.home',compact('vstatuses'));
    }
    
    public function createvstatus(Request $request)
    {
       $request->validate([
           'status'=>'required|unique:vehicle_statuses,status'
       ]);
       VehicleStatus::create([
           'status'=>$request->status
       ]);
       return redirect(route('vstatus-home'))->with('message','Vehicle status created...');
    }

    public function editvstatus($id,Request $request)
    {
       
        $request->validate([
            'status_update'=>'required|unique:vehicle_statuses,status,'.$id
        ]);
        $vstatus = VehicleStatus::findOrFail($id);
        $vstatus->update([
            'status'=>$request->status_update
        ]);
        return redirect(route('vstatus-home'))->with('message','Vehicle status updated...');
    }

    public function deletevstatus($id)
    {
        $status = VehicleStatus::findOrFail($id);
        $status->delete();
        return redirect(route('vstatus-home'))->with('message',$status->status.' was removed from vehicle status list..');
    }
}
