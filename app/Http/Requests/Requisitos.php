<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requisitos extends FormRequest
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
            'name'  => 'unique:requisitos|required',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'El requisito ya se encuentra registrado.',
            'name.required' => 'Nombre del requisito es obligatorio',

        ];
    }
}
