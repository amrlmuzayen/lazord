<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name'  => ['required', 'string', 'max:100'],
            'last_name'   => ['nullable', 'string', 'max:100'],
            'email'       => ['required', 'email', 'max:255'],
            'phone'       => ['nullable', 'string', 'max:30'],
            'clinic_name' => ['nullable', 'string', 'max:255'],
            'role'        => ['nullable', 'string', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'يرجى إدخال الاسم الأول.',
            'email.required'      => 'يرجى إدخال البريد الإلكتروني.',
            'email.email'         => 'يرجى إدخال عنوان بريد إلكتروني صحيح.',
        ];
    }
}