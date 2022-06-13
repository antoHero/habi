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
              'image',
              'required'
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
            'style' => [
              'string',
              'required',
              'max:25'
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
