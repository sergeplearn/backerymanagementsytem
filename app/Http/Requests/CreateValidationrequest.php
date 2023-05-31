<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationrequest extends FormRequest
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
            'bread50'=>'required',
            'long40'=>'required',
            'square40'=>'required',
            'long80'=>'required',
            'round'=>'required',
            'kirico'=>'required',
            'square80'=>'required',
            'bread200'=>'required',
            'bread300'=>'required',
            'bread500'=>'required',
            'bread1000'=>'required',
            'ref_code'=>['required', 'string'],
            'emply_id'=>'required',
            'date'=>'required',
            'user_id'=>'required',
        ];
    }
}
