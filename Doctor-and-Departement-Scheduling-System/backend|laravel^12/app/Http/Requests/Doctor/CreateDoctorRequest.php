<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
            'doctorID' => 'required|string|max:15',
            'name' => 'required|string',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string',
            'address' => 'string|required',
            'email' => 'required|email|string',
            'bio' => 'nullable|string'
        ];
    }
}
