<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRoleRequest extends FormRequest
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
        if (User::userHasPermission('can_create', 'roles') || User::userHasPermission('can_edit', 'roles')) {
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
    public function rules()
    {
        return [
            'service_id' => 'required|integer',
            'type_id' => 'required|integer',
            'can_view' => 'required|boolean',
            'can_create' => 'required|boolean',
            'can_edit' => 'required|boolean',
            'can_delete' => 'required|boolean',
            'status' => 'required|boolean'
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
            'service_id.required' => 'Lütfen yetkilerini belirmek istediğiniz servisi seçiniz.',
            'type_id.required' => 'Lütfen yekti atamak istediğiniz kullanıcı tipini seçiniz.',
            'can_view.required' => 'Görüntüleme yetkisi boş bırakılamaz',
            'can_create.required' => 'Oluşturma yetkisi boş bırakılamaz',
            'can_edit.required' => 'Düzenleme yetkisi boş bırakılamaz',
            'can_delete.required' => 'Silme yetkisi boş bırakılamaz',
            'status.required' => 'Durum boş bırakılamaz'
        ];
    }
}
