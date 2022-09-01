<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserTypeRequest extends FormRequest
{

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => $this->status == "on" ? 1 : 0,
        ]);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        if (User::userHasPermission('can_create', 'usertype') || User::userHasPermission('can_edit', 'usertype')) {
            return true;
        } else {
            return false;
        }
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|string',
            'name' => 'required|string',
            'status' => 'required|boolean',
        ];
    }

    /**
     * Error messages in case some validation errors happens
     *
     * @return array<int, string>
     */
    public function messages(): array
    {
        return [
            'code.required' => 'Kullanıcı tipi kod alanı boş bırakılamaz',
            'name.required' => 'Kullanıcı tipi adı boş bırakılamaz',
        ];
    }
}
