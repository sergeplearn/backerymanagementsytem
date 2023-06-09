<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class payment extends FormRequest
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
            'amount' => 'required|max:255',
            'emply_id' => 'required|max:255',
            'date' => 'required|max:255',
            'user_id' => 'required|max:255',
        ];
    }
}
