<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //por ahora no. mas adelante si no se alcanza a hacer los roles y permisos
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'type' => 'required',
            'poster' => 'required',
            'content' => 'required',
        ];
    }

   /* 
   Funcion para modificar los mensajes d error. No bueno para traducir
    public function messages()
    {
        return [
            'title.required' => 'Titulo requerido',
            'type.required' => 'Tipo requerido',
            'poster.required' => 'Poster requerido',
            'content.required' => 'Contenido requerido',
        ];
    } */

}
