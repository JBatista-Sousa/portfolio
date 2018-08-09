<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinasRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'descricao' => 'required|min:5',
            'cargaHoraria' => 'numeric|min:1'
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'O :attribute não pode ser vazio!',
            'required' => 'O campo :attribute não pode ser vazio!',
            'numeric' => 'O campo :attribute não pode ser vazio!',
            'min' => 'O campo :attribute deve ser maior que :min',
        ];
    }
}
