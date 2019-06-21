<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditCategoryRequest extends Request
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
            'txtCateName' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'txtCateName.required' => ' Hãy nhập tên danh mục ',
            'txtCateName.max' => 'Lưu ý: Tiêu đề danh mục dài tối đa 255 ký tự'
        ];
    }
}
