<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class increamentsal extends FormRequest
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
       'house_id'=>'required',
       'amount'=>'required',
       'date'=>'required',
      'user_id'=>'required',
       
        ];
    }
}
