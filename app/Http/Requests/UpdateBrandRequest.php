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
            'nome' => 'required|min:3|max:30',
            'indirizzo' => 'required',
            'email' => 'required|email',
            'sito_web' => 'required',
            'telefono' => 'required|min:3|max:20',
            'tipologia' => 'required|min:3|max:30',
            'nazione' => 'required|min:3|max:30',
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'Il nome è obbligatorio!',
            'nome.min' => 'Il nome non può essere più corto di 3 caratteri.',
            'nome.max' => 'Il nome non può essere più lungo di 30 caratteri.',
            'email.required' => 'La mail è obbligatoria!',
            'email.email' => 'La mail deve essere in formato email! (Contenere un @ e un indirizzo valido dopo.)',
            'sito_web.required' => 'Il sito web è obbligatorio!',
            'sito_web.min' => 'Il sito web non può essere più corto di 3 caratteri.',
            'sito_web.max' => 'Il sito web non può essere più lungo di 30 caratteri.',
            'nazione.required' => 'La nazione è obbligatorio!',
            'nazione.min' => 'La nazione non può essere più corto di 3 caratteri.',
            'nazione.max' => 'La nazione non può essere più lungo di 30 caratteri.',
        ];
    }
}
