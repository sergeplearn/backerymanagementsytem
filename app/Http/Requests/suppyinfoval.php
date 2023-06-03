<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class suppyinfoval extends FormRequest
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
            'name' => 'required',
            'tell' => 'required|phone:AUTO,CM',
            'address' => 'required',
            'NIC_no' => 'required',
            'date' => 'required',
            'user_id' => 'required',
        ];
    }
}
