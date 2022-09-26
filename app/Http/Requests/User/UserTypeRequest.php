<?php

namespace App\Http\Requests\User;

use App\Models\Service;
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
        $services = [];
        foreach ($this->services as $service => $method) {
            foreach ($method as $key => $value) {
                $services[$service][$key] = $value == 'on' ? 1 : 0;
            }
        }

        $this->merge([
            'status'    => $this->status == "on" ? 1 : 0,
            'services'  => $services
        ]);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        if (
            User::thisUserHasPermission('can_create', 'usertype')
            || // or
            User::thisUserHasPermission('can_edit', 'usertype')
        )   {
            return true;
        }
        else {
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
        $allServices = Service::all();
        $services = [];
        foreach ($allServices as $service) {
            $services[] = [
                $service->code => [
                    'can_view'      => 'boolean',
                    'can_create'    => 'boolean',
                    'can_update'    => 'boolean',
                    'can_delete'    => 'boolean',
                ]
            ];
        }
        return [
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'services' => $services
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
