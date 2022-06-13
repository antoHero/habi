<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApparelRequest extends FormRequest
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
            'nullable',
            'min:3',
            'max:100'
          ],
          'amount' => [
            'numeric',
            'nullable'
          ],
          'image' => [
            'image',
            'nullable'
          ],
          'qty' => [
            'numeric',
            'nullable'
          ],
          'size' => [
            'nullable',
            'array'
          ],
          'occasion' => [
            'string',
            'nullable',
            'max:25'
          ],
          'style' => [
            'string',
            'nullable',
            'max:25'
          ],
          'material' => [
            'string',
            'nullable',
            'max:25'
          ],
          'detail' => [
            'string',
            'nullable'
          ],
          'category_id' => [
            'numeric',
            'nullable'
          ],
          'sub_category_id' => [
            'numeric',
            'nullable'
          ]
        ];
    }
}
