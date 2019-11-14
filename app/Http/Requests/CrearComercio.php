<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearComercio extends FormRequest
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

            'nombre'    => 'unique:comercios,nombre|max:255',
            'nit' => 'unique:comercios',
            'email'     => 'email',
            'logo'      => 'image|dimensions:min_width=300,min_height=300,max_width=1000,max_height=1000',


        ];
    }

    public function messages()
    {
        return [
            'nombre.unique' => 'El Comercio ya se encuentra registrado.',
            'nit.unique' => 'El Comercio ya se encuentra registrado.',
            'logo.image' => 'Por favor adjunte un formato válido de imagen (jpeg, png, bmp, gif, o svg).',

        ];
    }
}
