<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Mensajescont extends FormRequest
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
            'nombreCont'=> 'required',
            'emailCont' => 'required | email',
            'mensajeCont' => 'required | max:255'
        ];
    }
}
