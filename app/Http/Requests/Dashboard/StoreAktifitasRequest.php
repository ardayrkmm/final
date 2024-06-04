<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreAktifitasRequest extends FormRequest
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
            'nama' => [
                'required', 'string', 'max:255',
            ],
            'deskripsi' => [
                'required', 'string', 'max:255',
            ],
            'kalori' => [
                'required', 'string', 'max:255',
            ],
            'gambar' => [
                'nullable', 'file', 'max:1024',
            ],
        ];
    }
}
