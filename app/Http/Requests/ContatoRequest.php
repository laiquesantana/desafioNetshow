<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
            'arquivo' => 'required|file|mimetypes:application/pdf,text/plain,application/vnd.oasis.opendocument.text,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:500',
            
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'arquivo.mimetypes'  => 'Apenas anexos no formato pdf, docx, doc, odt ou txt são aceitos !',
            'arquivo.max'  => 'Apenas Anexos até 500 kb são aceitos !',
            'nome.required' => 'O nome é obrigatório !',
            'email.required' => 'O email é obrigatório !',
            'mensagem.required' => 'a mensagem é obrigatória !'
        ];
    }
}
