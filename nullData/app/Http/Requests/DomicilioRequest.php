<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioRequest extends FormRequest
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
            'calle' => 'required|max:255',
            'colonia' => 'required|max:255',
            'cp' => 'required|max:5',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'calle.required' => 'La calle es requerida.',
            'calle.max' => 'La longitud de la calle no debe ser mayor a 255 caracteres.',
            'colonia.required' => 'La colonia es requerida.',
            'colonia.max' => 'La longitud de la colonia no debe ser mayor a 255 caracteres.',
            'cp.required' => 'El CP es requerido.',
            'cp.max' => 'La longitud del CP no debe ser mayor 5 caracteres.',
        ];
    }
}
