<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VehicleStatus;
use App\Models\VehicleType;
use App\Models\VehicleUser;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\VehicleRegistration;

class VregController extends Controller
{
 public function home(){
     $vreg = VehicleRegistration::all();
     $vuser = VehicleUser::all();

    
     return view('VehicleRegistration.home',compact('vreg','vuser'));
 }

 public function create(){
     
    $vusers = VehicleUser::all();
    $models = VehicleType::all();
    $statuses= VehicleStatus::pluck('status','id')->prepend('Select Vehicle Status','');
     return view('VehicleRegistration.create',compact('vusers','models','statuses'));
 }
 public function store(Request $request)
 {
     $request->validate([
         'vehicle_user'=>'required|unique:vehicle_registrations,vuser_id|exists:vehicle_users,id',
         'vehicle_model'=>'required|exists:vehicle_types,id',
         'vehicle_status'=>'required|exists:vehicle_statuses,id',
         'vehicle_regno'=>'required|min:8',
         'purchase_date'=>'required',
         'purchase_value'=>'required|numeric',
     ]);

     VehicleRegistration::create([
        'vuser_id'=>$request->vehicle_user,
        'vmodel_id'=>$request->vehicle_model,
        'regno'=>$request->vehicle_regno,
        'vstatus_id'=>$request->vehicle_status,
        'purchase_date'=>date('Y-m-d',strtotime($request->purchase_date)),
        'purchase_amount'=>$request->purchase_value
    ]);

    return redirect()->route('vreg-home');

     

 }

 public function updateVreg(VehicleRegistration $regValue){
       
    $vusers = VehicleUser::all();
    $models = VehicleType::all();
    $statuses= VehicleStatus::pluck('status','id')->prepend('Select Vehicle Status','');
     return view('VehicleRegistration.update',compact('regValue','vusers','models','statuses'));
 }

 public function storeVregUpdate(Request $request,VehicleRegistration $regValue)
 {
    $request->validate([
        'vehicle_user'=>'required|unique:vehicle_registrations,vuser_id,'.$regValue->id.',|exists:vehicle_users,id',
        'vehicle_model'=>'required|exists:vehicle_types,id',
        'vehicle_status'=>'required|exists:vehicle_statuses,id',
        'vehicle_regno'=>'required|min:8|unique:vehicle_registrations,vuser_id,'.$regValue->id,
        'purchase_date'=>'required',
        'purchase_value'=>'required|numeric',
    ]);


    $regValue->update([
        'vuser_id'=>$request->vehicle_user,
        'vmodel_id'=>$request->vehicle_model,
        'regno'=>$request->vehicle_regno,
        'vstatus_id'=>$request->vehicle_status,
        'purchase_date'=>date('Y-m-d',strtotime($request->purchase_date)),
        'purchase_amount'=>$request->purchase_value
    ]);

    return redirect()->route('vreg-home');


 }


}
