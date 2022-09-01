<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * Stops the request if an error occurs during validation.
     *
     * @var boolean
     */
    protected $stopOnFirstFailure = true;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    /**
     * Error messages in case some validation errors happens
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => 'E-posta alanı boş bırakılamaz',
            'email.email' => 'E-posta alanı geçerli bir e-posta adresi olmalıdır',
            'password.required' => 'Şifre alanı boş bırakılamaz',
            'password.min' => 'Şifre en az :attribute karakterden olmalıdır.',
        ];
    }
}
