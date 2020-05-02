<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'email|required|unique:users,email',
            'name'=>'required| min:2 |max:25',
            'password'=>'required| min:8',
        ];



    }
    public function  messages()
    {

        return[
            'email.email' => 'فرمت ایمیل غلط است ',
            'email.unique' => ' ایمیل در دیتابیس است ',
            'email.required' => 'لطفا فیلد ایمیل را پر کنید ',
            'name.required' => 'فیلد را پر کنید ',
            'name.min' => 'بیش از دو کاراکتر باید باشد',
            'password.required' => 'فیلد پسورد خالیست ',
            'password.min' => 'پسورد ضعیف است ',


        ];

    }
}
