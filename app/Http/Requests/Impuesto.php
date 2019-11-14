<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Impuesto extends FormRequest
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
            'name'  => 'unique:impuestos|required',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'El impuesto ya se encuentra registrado.',
            'name.required' => 'Nombre del impuesto es obligatorio',

        ];
    }
}
