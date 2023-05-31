<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registeremploysalrequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
          'date'=> 'required|max:255',
            'name'=> 'required|max:255',
            'salary'=> 'required|max:255',
            'empy_id'=> 'required|max:255',
            'user_id'=> 'required|max:255',
        ];
    }
}
