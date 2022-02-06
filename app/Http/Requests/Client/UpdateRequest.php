<?php

namespace App\Http\Requests\Client;

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
            'name' => 'string|required|max:255',
            'dni' => 'string|required|unique:clients,dni,'
            .$this->route('client')->id.'|max:11',
            'ruc' => 'string|nullable|unique:clients,ruc,'
            .$this->route('client')->id.'|max:11',
            'address' => 'string|nullable|max:255',
            'phone' => 'string|required|max:10',
            'email' => 'string|required|unique:clients,email,'
            .$this->route('client')->id.'|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            
            'dni.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'dni.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'dni.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'dni.max' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'ruc.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'ruc.max' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'address.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'address.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'address.max' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'phone.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'phone.max' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'email.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'email.email' => '<x-auth-validation-errors></x-auth-validation-errors>',
        ]; 
    }
}
