<?php

namespace App\Http\Requests\Society;

use Illuminate\Foundation\Http\FormRequest;

class SocietyRegisterRequest extends FormRequest
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
            'id_card_number' => 'required|unique:societies,id_card_number',
            'password' => 'required|min:6',
            'name' => 'required',
            'born_date' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'regional_id' => 'required|exists:regionals,id'
        ];
    }
}
