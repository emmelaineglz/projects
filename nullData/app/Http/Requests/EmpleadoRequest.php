<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            'nombre' => 'required|max:255',
            'email' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido.',
            'nombre.max' => 'La longitud del nombre no debe ser mayor a 255 caracteres.',
        ];
    }
}
