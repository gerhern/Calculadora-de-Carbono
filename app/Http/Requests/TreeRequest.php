<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreeRequest extends FormRequest
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
        return [
            //
            'footprint' => 'numeric | between:0,500'
        ];
    }

    public function messages(){
        
        return [
            'footprint.between' => 'La huella de carbono debe estar entre 0 y 500',
            'footprint.numeric' => 'La huella de carbono es un número requerido'
        ];
    }
}
