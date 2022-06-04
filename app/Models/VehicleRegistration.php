<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRegistration extends Model
{
    use HasFactory;
    protected $fillable = ['vuser_id','vmodel_id','regno','vstatus_id','purchase_date','purchase_amount'];

 
    public function vehicleUser()
    {
        return $this->belongsTo(VehicleUser::class,'vuser_id');
    }
    public function vehicleModel()
    {
       return $this->belongsTo(VehicleType::class,'vmodel_id');
    }
    public function vehicleStatus()
    {
       return $this->belongsTo(VehicleStatus::class,'vstatus_id');
    }
    public function getLocation($id)
    {
        $vuser = VehicleUser::findOrfail($id);
        return $vuser->location->location_name;
    }
}
