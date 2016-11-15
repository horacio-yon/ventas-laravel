<?php

namespace sisVenta\Http\Requests;

use sisVenta\Http\Requests\Request;

class PersonaFormRequest extends Request
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
            'nombre'=>'required|max:50',
            'tipo_documento'=>'max:20',
            'num_documento'=>'max:45',
            'direccion'=>'max:60',
            'telefono' =>'max:20',
            'email' =>'max:45'

        ];
    }
}
