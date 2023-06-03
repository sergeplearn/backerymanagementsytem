<?php

namespace App\Http\Requests;

use App\Models\user;
use Illuminate\Foundation\Http\FormRequest;

class Houseworkerval extends FormRequest
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
            'fname' => 'required|unique:houseworkers',
            'sname' => 'required',
            'tell' => 'required|phone:AUTO,CM',
            'address' => 'required',
            'date' => 'required',
            'salary' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'tell.phone' => 'the number most be a valide cameroon number',
            'fname.unique' => 'please the first name most be unique',
        ];
    }
}
