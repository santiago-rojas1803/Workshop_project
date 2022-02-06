<?php

namespace App\Http\Requests\Product;

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
            'name' => 'string|required|unique:products,name,'
            .$this->route('product')->id.'|max:255',
            'sell_price' => 'required',
            'category_id' => 'integer|required|exists:App\Models\Category,id',
            'provider_id' => 'integer|required|exists:App\Models\Provider,id',
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

            'category_id.integer' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'category_id.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'category_id.exists' => '<x-auth-validation-errors></x-auth-validation-errors>',

            'provider_id.integer' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'provider_id.required' => '<x-auth-validation-errors></x-auth-validation-errors>',
            'provider_id.exists' => '<x-auth-validation-errors></x-auth-validation-errors>',
        ]; 
    }
}
