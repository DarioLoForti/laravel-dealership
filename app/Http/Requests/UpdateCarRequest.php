<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'marca' => 'required|max:50',
            'modello' => 'required|max:50',
            'prezzo' => 'required|decimal:2',
            'alimentazione' => 'required|max:50',
            'cilindrata' => 'required|integer',
            'cambio' => 'required|max:20',
            'porte' => 'integer|max:5|nullable',
            'posti' => 'integer|max:10|nullable',
            'tipologia' => 'max:50',
            'stato' => 'required|max:20',
            'anno_immatricolazione' => 'date|nullable',
            'km' => 'nullable',
            'immagine' => 'max:255',

        ];
    }

    public function messages()
    {
        return [
            'marca.required' => 'Il nome della marca è obbligatoria',
            'marca.max'     => 'Il nome della marca può contenere al massimo 50 caratteri',
            'modello.required'     => 'Il nome dell\'modello è obbligatorio',
            'modello.max'     => 'Il nome dell\'modello può contenere al massimo 50 caratteri',
            'prezzo.required' => 'Il prezzo è obbligatorio',
            'prezzo.decimal' => 'Il prezzo deve avere due cifre decimali',
            'alimentazione.required' => 'La tipologia di alimentazione è obbligatorio',
            'alimentazione.max' => 'La tipologia può contenere al massiomo 50 caratteri',
            'cilindrata.required' => 'La cilindrata è obbligatoria',
            'cilindrata.integer' => 'Deve essere un numero intero',
            'cambio.required' => 'La tipologia di cambio è obbligatoria',
            'cambio.max' => 'La tipologia di cambio può contenere al massimo 20 caratteri',
            'porte.integer' => ' Deve essere un numero intero',
            'porte.max'     => 'Il valore può essere al massimo 5',
            'posti.integer' => 'Deve essere un numero intero',
            'posti.max'     => 'Il valore può essere al massimo 10',
            'tipologia.max' => 'La tipologia può avere al massimo 50 caratteri',
            'stato.required' => 'Lo stato è obbligatorio',
            'stato.max' => 'Lo stato può contenere',
            'anno_immatricolazione.dateformat' => 'La data deve essere nel formato Y-M-D',
            'anno_immatricolazione.integer' => 'Deve essere un numero',
            'km.required' => 'I kilometri sono obbligatori',
            'immagine.max' => 'Il link dell\' immagine può contenere al massimo 255 caratteri'

        ];
    }
}
