<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogCategoryRequest extends FormRequest
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
        'txtCateName' => 'required|unique:blog_category,ten_danh_muc'
        ];
    }
    public function messages()
    {
        return [
            'txtCateName.required' => ' Hãy nhập tên danh mục ',
            'txtCateName.unique' => 'Tên danh mục này đã tồn tại '
            
        ];
    }
}
