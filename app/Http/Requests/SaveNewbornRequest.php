<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SaveNewbornRequest extends FormRequest
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
                    'birthday' => ['required', 'date','before_or_equal: today'],
                    'apgar_score' => ['required', 'string','between:0,10'],
                    'birth_weight' => ['required', 'string'],
                    'birth_height' => ['required', 'string'],
                    'birth_hcm' => ['required', 'string'],
                    'skin' => ['required', 'string'],
                    'eyes' => ['required', 'string'],
                    'temperature' => ['required', 'string'],
                    'notes' => ['nullable', 'string'],

                ];
                break;
            }
            case 'PUT':
            {
                return [
                   //
                ];
            }
            default: break;
        }
    }
}
