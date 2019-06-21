<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSliderRequest extends FormRequest
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
            'txtChuDe' => 'required|unique:slide,chu_de'
        ];
    }

    public function messages()
    {
        return [
            'txtChuDe.required' => ' Hãy nhập chủ đề ở đây ',
            'txtChuDe.unique' => 'Chủ đề này đã tồn tại'
            
        ];
    }
}
