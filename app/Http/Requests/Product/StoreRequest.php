<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'string|required|unique:products|max:255',
            'sell_price' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.string' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.unique' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'name.max' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'sell_price.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
        ]; 
    }
}
