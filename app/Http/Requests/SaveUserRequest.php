<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
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
                    'type' => ['required'],
                    'first_name' => ['required', 'string', 'max:70'],
                    'last_name' => ['nullable', 'string', 'max:70'],
                    'email' => ['required', 'string', 'email', 'max:70', 'unique:users,email',Rule::unique('users', 'email')->ignore(Auth::id()),],
                    'phone' => ['nullable', 'string', 'unique:users,phone','regex:/^[0-9]{10}/'],
                    'address'=> ['nullable', 'string'],
                    'city'=> ['nullable', 'string'],
                    'province'=> ['nullable', 'string'],
                    'postal'=> ['nullable', 'string'],
                    'birthday'=> ['nullable', 'date'],
                    'nic' => ['nullable', 'string','regex:/([0-9]{9}[x|X|v|V]|[0-9]{12})/'],
                ];
                break;
            }
            case 'PUT':
            {
                return [
                    'type' => ['required'],
                    'first_name' => ['required', 'string', 'max:70'],
                    'last_name' => ['nullable', 'string', 'max:70'],
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:70',
                        Rule::unique('users', 'email')->ignore($this->route('user')->id),
                    ],
                    'phone' => [
                        'nullable',
                        'string',
                        Rule::unique('users', 'phone')->ignore($this->route('user')->id),
                        'regex:/^[0-9]{10}/'
                    ],
                    'address'=> ['nullable', 'string'],
                    'city'=> ['nullable', 'string'],
                    'province'=> ['nullable', 'string'],
                    'postal'=> ['nullable', 'string'],
                    'birthday'=> ['nullable', 'date'],
                    'nic' => ['nullable', 'string','regex:/([0-9]{9}[x|X|v|V]|[0-9]{12})/'],

                ];
                break;
            }
            default: break;
        }
    }
}
