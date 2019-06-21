<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostOrderRequest extends FormRequest
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
            'txthoten' => 'required|unique:khach_hang,ten_khach_hang',
            'txtaddress' => 'required',
            'txttel' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txthoten.required' => ' Bạn chưa nhập họ tên ',
            'txtaddress.unique' => 'Bạn chưa nhập địa chỉ',
            'txttel.required' => 'Làm ơn để lại số điện thoại của bạn'
        ];
    }
}
