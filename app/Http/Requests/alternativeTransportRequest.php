<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alternativeTransportRequest extends FormRequest
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
            'distance' => 'numeric | between:1 , 100',
        ];
    }

    public function messages(){
        
        return [
            'distance.between' => 'La distancia debe estar entre 1 y 100',
            'distance.numeric' => 'La distancia es un número requerido'
        ];
    }
}
