<?php

namespace App\Http\Requests\Category;

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
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:250',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'description.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'description.max' => '<x-auth-validation-errors></x-auth-validation-errors>',
        ]; 
    }
}
