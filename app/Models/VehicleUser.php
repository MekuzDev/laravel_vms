<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleUser extends Model
{
    use HasFactory;
    protected  $fillable = ['fullname', 'location_id'];

    public function location()
    {
      /* A relationship between the VehicleUser and Location model. */
       return $this->belongsTo(Location::class);
    }

    public function vreg (){
      return $this->hasOne(VehicleRegistration::class);
    }
}
