<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHintRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            "type" => ['required', 'string', 'in:Moto,Carro,Caminhão'],
            "brand" => ['required', 'string'],
            "model" => ['required', 'string'],
            "version" => ['string'],
            "hint" => ['required', 'string']
        ];
    }
}
