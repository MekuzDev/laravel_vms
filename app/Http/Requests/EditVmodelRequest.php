<?php

namespace App\Http\Requests;


use App\Models\VehicleType;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class EditVmodelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->route('id');
        $vehicle = VehicleType::findOrFail($id);
    
        $unique = Rule::unique($vehicle->getTable(), 'model_name')->ignore($vehicle)->where('model_year', $this->request->get('model_year'));
    
        return [
            'model_name' => ['required', $unique],
            'model_year' => ['int','required'],
        ];
    }
    
}
