<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:50|unique',
            'indirizzo' => 'required',
            'email' => 'required|email|max:150',
            'sito_web' => 'required',
            'telefono' => 'required|min:3|max:50',
            'tipologia' => 'required|min:3|max:150',
            'nazione' => 'required|min:3|max:150',
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'Il nome è obbligatorio!',
            'nome.min' => 'Il nome non può essere più corto di 3 caratteri.',
            'nome.max' => 'Il nome non può essere più lungo di 150 caratteri.',
            'nome.unique' => 'Il nome deve essere univoco!',
            'email.required' => 'La mail è obbligatoria!',
            'email.email' => 'La mail deve essere in formato email! (Contenere un @ e un indirizzo valido dopo.)',
            'email.max' => 'La mail non può essere più lunga di 150 caratteri.',
            'sito_web.required' => 'Il sito web è obbligatorio!',
            'sito_web.min' => 'Il sito web non può essere più corto di 3 caratteri.',
            'sito_web.max' => 'Il sito web non può essere più lungo di 150 caratteri.',
            'telefono.required' => 'Il numero di telefono è obbligatorio!',
            'telefono.min' => 'Il numero di telefono non può essere più corto di 3 caratteri.',
            'telefono.max' => 'Il numero di telefono non può essere più lungo di 150 caratteri.',
            'nazione.required' => 'La nazione è obbligatorio!',
            'nazione.min' => 'La nazione non può essere più corto di 3 caratteri.',
            'nazione.max' => 'La nazione non può essere più lungo di 150 caratteri.',
        ];
    }
}
