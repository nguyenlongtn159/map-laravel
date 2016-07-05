<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddLangRequest extends Request
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
            'id' => 'required:langs,id',
            'key' => 'required:langs,key',
            'eng' => 'required:langs,eng',
            'vn'  => 'required:langs.vn'

        ];
    }
    public function messages(){
        return[
            'key.required' => 'Please enter key!',
            'key.unique'  => 'This key is exist!',
            'id.required'  => 'Please enter id!',
            'eng.required'  => 'Please enter eng!',
            'vn.required'  => 'Please enter vn!'
        ];

    }



}
