<?php

namespace App\Http\Controllers;


use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VehicleTypesController extends Controller
{
    public function home()
    {
        $vmodels = VehicleType::orderBy('model_name','asc')->paginate(10);
        return view('vehicle_types.home',compact('vmodels'));
    }
    public function createvmodel(Request $request)
    { 
            /* A function that checks if the model name and model year exists in the database. */
             $model_name = $request->model_name;
             $model_year = $request->model_year;
             $vmodels = VehicleType::all();
             foreach ($vmodels as $value) {
                 if($value->model_name == $model_name && $value->model_year == $model_year){
                    return redirect(route('vmodel-home'))->with('existError','vehicle model and year already exist...');
                  }
              }
            

            
        $request->validate([
            'model_name'=> 'required',
            'model_year'=> 'required|int'
        ]);
        VehicleType::create([
            'model_name'=>ucwords($request->model_name),
            'model_year'=>$request->model_year
        ]);

        return redirect(route('vmodel-home'))->with('message','vehicle model created...');
    }


    public function editvmodel(Request $request ,$id)
    {
         /* Checking if the model name and model year exists in the database. */
         $vmodel  = DB::table('vehicle_types')
             ->where('model_name',$request->model_name_update)
             ->where('model_year',$request->model_year_update)
             ->where('id','!=',$id)->get();

        if(count( $vmodel)){
         /* Redirecting the user back to the previous page with a message. */
          return back()->with('existError','vehicle model and year already exist...');
        }

       /* Validating the input fields. */
        $request->validate([
            'model_name_update'=>'required',
            'model_year_update'=>'required|int'
        ]);
        
       /* Updating the model name and model year of the vehicle type. */
        VehicleType::findOrFail($id)->update([
            'model_name'=>$request->model_name_update,
            'model_year'=>$request->model_year_update
        ]);
        return back()->with('message','vehicle model was updated...');
    }

    public function deletevmodel($id)
    {
        $vmodel = VehicleType::findOrFail($id);
        $vmodel->delete();
        return back()->with('message',$vmodel->model_name." of $vmodel->model_year was removed from vehicle model list..");
    }
}
