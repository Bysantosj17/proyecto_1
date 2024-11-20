<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'tatoos' => 'required|image',
            'tel' => ['required', 'max:10'],
            'email' => ['required'],
            'name' => 'required',
            'fecha_reserva' => 'required',
            'hora_reserva' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es requerido',
    //     ];
    // }
}
