<?php

namespace SGU\Http\Requests;

use SGU\Http\Requests\Request;
use Illuminate\Routing\Route;
class UserUpdateRequest extends Request
{
    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    


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
            
           'nombre' => 'required|string|max:50|min:4|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\- ]+$/i', 
            'apellido' => 'required|string|max:50|min:4|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\- ]+$/i', 
            'ci' => 'required|unique:users,ci,' . $this->route->getParameter('usuario'), 
            'telef1' => 'required|digits_between:10,15', 
            'telef2' => 'required|digits_between:10,15', 
            'email' => 'required|unique:users,email,' . $this->route->getParameter('usuario'), 
            'direccion' => 'required|string|max:150|min:10|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\,\&\-\/ ]+$/i', 
            'rol' => 'required|in:1,2,3',
        ];
    }
}
