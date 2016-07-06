<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LangRequest extends Request
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
            //
            'key' => 'required|unique:langs,key',
            'eng' => 'required:langs,eng',
            'vn'  => 'required:langs,vn'

        ];
    }
    public function messages(){
        return[
            'key.required' => 'please enter key!',
            'key.unique'  => 'This key is exist!',
            'eng.required'  => 'Please enter eng!',
            'vn.required'  => 'Please enter vn!'
        ];

    }



}
