<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveChildRequest extends FormRequest
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
        return [
            'first_name' => ['required', 'string', 'max:70'],
            'last_name' => ['nullable', 'string', 'max:70'],
            'birthday'=> ['nullable', 'date'],
            'date_of_registration'=> ['nullable', 'date'],
            'birth_weight'=> ['numeric', 'between:0,99.99'],
            'health_status'=> ['nullable', 'string'],
        ];
    }
}
