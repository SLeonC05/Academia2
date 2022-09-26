<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocenteRequest extends FormRequest
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
            //implementamos validaciones
            'nombres'=>'required|unique:docentes|max: 25',
            'apellidos'=>'required|unique:docentes|max: 40',
            'titulo'=>'required|max:50',
            'edad'=>'required|integer',
            'fecha'=>'required|date',
            'imagen'=>'image|max: 5000',
            'documento'=>'required|file'
        ];
    }
}
