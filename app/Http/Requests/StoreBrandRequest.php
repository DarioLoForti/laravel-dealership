<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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

        ];
    }
}
