<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'txtChuDe' => 'required|unique:blogs,chu_de',
            'sltDanhMuc' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtChuDe.required' => ' Hãy nhập tên ở đây ',
            'txtChuDe.unique' => 'Bài viết này đã tồn tại',
            'sltDanhMuc.required' => 'Chọn danh mục cho bài viết'
            
        ];
    }
}
