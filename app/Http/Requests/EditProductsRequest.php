<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditProductsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sltCate' => 'required',
            'txtname'=>'required|unique:sanpham,ten_san_pham',
            'txtGiatien'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'sltCate.required' => ' Bạn chưa chọn danh mục cho sản phẩm',
            'txtname.required' => ' Hãy nhập tên sản phẩm',
            'txtname.unique' => ' Tên sản phẩm vừa tạo đã tồn tại',
            'txtGiatien.required' => ' Hãy nhập giá cho sản phẩm'
        ];
    }
}
