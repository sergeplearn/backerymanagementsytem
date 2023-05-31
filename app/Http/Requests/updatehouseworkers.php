<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatehouseworkers extends FormRequest
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
          
                'fname'=>'required',
                'sname'=>'required',
                'tell'=>'required|phone:AUTO,CM',
                'address'=>'required',
               'date'=>'required',
                'salary'=>'required',
               
        
        ];
    }

    public function messages(){
        return[
        'tell.phone' => 'the number most be a valide cameroon number',
      
        ]; }
}
