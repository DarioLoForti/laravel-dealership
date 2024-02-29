<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOptionalRequest extends FormRequest
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
            'nome'=> 'required|max:100',
            'descrizione'=>'required',
            'prezzo'=>'required|decimal:2',
        ];
    }
    public function messages(){
        return[
            'nome.required'=> 'Il nome è obbligatorio'
            'nome.max'=> 'Il nome puo contenere al massimo 100 caratteri'
            'descrizione.required' => 'La descrizione è obbligatorio'
            'prezzo.required' => 'Il prezzo è obbligatorio'
            'descrizione.required' => 'Il prezzo deve avere due cifre decimali',
        ]
    }
}
