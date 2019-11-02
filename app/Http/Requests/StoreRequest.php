<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Material;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $size = Material::SIZE;
        array_push($size, 0);
        return [
            
            'name' => 'required',
            'price_type' => 'required|' . Rule::in( Material::PRICE_TYPE ),
            'unit_type' => 'required|' . Rule::in( Material::UNIT_TYPE)
            //
        ];
    }
}
