<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class managerrequest extends FormRequest
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
            'name_company'=>'required',
            'education'=>'required',
            'email'=>'required',
            'password'=>'required'
            /*'name_company'=>['in:123'] */
        ];
    }
}
