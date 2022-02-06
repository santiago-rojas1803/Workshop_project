<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|max:250',

            'email' => 'required|email|string|unique:providers,email,',
            $this->route('provider')->id.'|max:200',

            'ruc_number' => 'required|string|min:11|unique:providers,ruc_number,',
            $this->route('provider')->id.'|max:11',

            'address' => 'nullable|string|max:250',
            
            'phone' => 'required|string|min:10|unique:providers,phone,',
            $this->route('provider')->id.'|max:10',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            
            'email.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.email' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'ruc_number.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc_number.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc_number.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc_number.min' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc_number.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'address.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'address.string' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'phone.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.min' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',
        ]; 
    }
}
