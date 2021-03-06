<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Barrio extends FormRequest
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
            'name'  => 'unique:barrios|required',
            'zona'  => 'required',
            'upz'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'El barrio ya se encuentra registrado.',
            'name.required' => 'Nombre del barrio es obligatorio',
            'zona.required' => 'Zona del barrio es obligatorio',
            'upz.required'  => 'UPZ del barrio es obligatorio',

        ];
    }
}
