<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
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
            'nama' => 'string|required',
            'email' => 'string|required|email|unique:users,email',
            'password' => 'string|required',
            'photo_profile' => 'string|required',
            'division_id' => 'integer|required',
        ];
    }
}
