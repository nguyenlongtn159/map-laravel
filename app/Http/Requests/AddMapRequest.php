<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddMapRequest extends Request
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
            'name' => 'required:maps,name',
            'address' => 'required:maps,address',
            'lat'  => 'required:maps,lat',
            'lng' => 'required:maps,lng',
            'type' => 'required:maps,type'
        ];
    }
    public function messages(){
        return[
            'name.required' => 'please enter name!',
            'address.required'  => 'Please enter address!',
            'lat.required'  => 'Please enter lat!',
            'lng.required'  => 'Please enter lng!',
            'type.required'  => 'Please enter type!'
        ];

    }



}
