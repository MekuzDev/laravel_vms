<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;
    protected $fillable = ['model_name','model_year'];

    public function vreg()
    {
        return $this->hasMany(VehicleRegistration::class);
    }
}
