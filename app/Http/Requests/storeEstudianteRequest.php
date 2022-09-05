<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeEstudianteRequest extends FormRequest
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

            'numDoc'=>'required|integer',
            'docIdent'=>'required|mimes:pdf',
            'fechaExp'=>'required:nullable|date',
            'nombres'=>'required|max: 50',
            'primerApellido'=>'required|max: 50',
            'segundoApellido'=>'required:string|max: 50',
        ];
    }
}
