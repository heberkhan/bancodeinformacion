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
            
            'nombreEstablecimiento'    => 'unique:comercios,nombre|max:255',
            'email'     => 'email',
            'logo'      => 'image',
            'facebook'  => 'url',
            'twitter'   => 'url',
            'instagram' => 'url',
            'url'       => 'url',
            'lat'       => 'numeric',
            'long'      => 'numeric',

        ];
    }
}
