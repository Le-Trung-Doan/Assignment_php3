<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        $categoryRule = [
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->id)
            ]
        ];
        return $categoryRule;
    }

    public function messages()
    {
        return [
          'name.required' => 'Bạn chưa nhập tên danh mục',
          'name.unique' => 'Tên danh mục đã tồn tại',
        ];
    }
}
