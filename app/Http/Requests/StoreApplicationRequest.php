<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            'internship_id' => 'required|exists:internships,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'cover_letter' => 'required|file|mimes:pdf',
            'resume' => 'required|file|mimes:pdf',
        ];
    }
}
