<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApparelRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
              'string',
              'required',
              'min:3',
              'max:100'
            ],
            'amount' => [
              'numeric',
              'required'
            ],
            'image' => [
              'required', 
              'image', 
              'mimes:jpeg,png,jpg,gif,svg,webp,jfif', 
              'max:2048', 
              'dimensions:width=788, height=1000'
            ],
            'qty' => [
              'numeric',
              'required'
            ],
            'size' => [
              'required',
              'array'
            ],
            'occasion' => [
              'string',
              'required',
              'max:25'
            ],
            'style_id' => [
              'numeric',
              'required',
            ],
            'material' => [
              'string',
              'required',
              'max:25'
            ],
            'detail' => [
              'string',
              'required'
            ],
            'category_id' => [
              'numeric',
              'required'
            ],
            'sub_category_id' => [
              'numeric',
              'required'
            ]
        ];
    }
}
