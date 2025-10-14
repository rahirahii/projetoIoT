<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class DispositivoRequest extends FormRequest
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
            'ambiente_id'=>'required',
            'sensor_id' => 'required',
            'status' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'message' => 'erro de validação',
                'errors' => $validator->errors()
            ], 422));
        }

        throw new ValidationException($validator);
    }

    public function messages()
    {
        return [
            'ambiente_id.required'=>'o id do ambiente em que o led se encontra é obrigatório',
            'sensor_id.required' => 'o id do sensor é obrigatório',
            'status' => 'o status é obrigatório'
        ];
    }
}
