<?php

namespace sisVenta\Http\Requests;

use sisVenta\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $route;
    public function __construct(Route $route)
    {   
        $this->route= $route;
    }
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
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,'.$this->route->getParameter('usuario'),
            'password' => 'confirmed'
        ];
    }
}
