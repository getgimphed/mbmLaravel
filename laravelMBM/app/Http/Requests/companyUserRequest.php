<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class companyUserRequest extends Request
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
        return ['compName'=>'required',
        'compEmail'=>'required|email|unique:companyUsers,compEmail',
        'hrMob'=>'required',
        'password'=>'required|min:6|confirmed',
        'password_confirmation'=>'required'];
    }
}

