<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeerequest extends FormRequest
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
            'name'=>'required',
            
            'gender'=>'required',
            'date_of_birth'=>'required',
            'hire_date'=>'required',
            'education'=>'required',
            'degree'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phon_number'=>'required',
            'section_id'=>'required',
            'jop_id'=>'required'
            
        ];
    }
}
