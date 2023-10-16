<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'admission_number' => 'required|string|unique:students,admission_number',
            'gender' => 'required|string|in:male,female',
            'state' => 'required|string|max:15',
            'school_type' => 'required|string|in:public,private'
        ];
    }
}
