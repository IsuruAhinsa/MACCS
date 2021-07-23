<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'type' => ['required', 'string'],
                    'first_name' => ['required', 'string', 'max:100'],
                    'last_name' => ['nullable', 'string', 'max:100'],
                    'email' => ['required', 'string', 'email', 'max:70', 'unique:midwives,email'],
                    'phone' => ['nullable', 'string', 'unique:midwives,phone'],
                    'address'=> ['nullable', 'string'],
                    'city'=> ['nullable', 'string'],
                    'province'=> ['nullable', 'string'],
                    'postal'=> ['nullable', 'string'],
                    'birthday'=> ['nullable', 'string'],
                    'nic' => ['nullable', 'string'],
                    'children' => ['nullable', 'integer'],
                ];
                break;
            }
            case 'PUT':
            {
                return [
                    'type' => ['required', 'string'],
                    'first_name' => ['required', 'string', 'max:100'],
                    'last_name' => ['nullable', 'string', 'max:100'],
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:70',
                        Rule::unique('midwives', 'email')->ignore($this->route('midwife')->id),
                    ],
                    'phone' => [
                        'nullable',
                        'string',
                        Rule::unique('midwives', 'phone')->ignore($this->route('midwife')->id),
                    ],
                    'address'=> ['nullable', 'string'],
                    'city'=> ['nullable', 'string'],
                    'province'=> ['nullable', 'string'],
                    'postal'=> ['nullable', 'string'],
                    'birthday'=> ['nullable', 'string'],
                    'nic' => ['nullable', 'string'],
                    'children' => ['nullable', 'integer'],

                ];
                break;
            }
            default: break;
        }
    }
}
