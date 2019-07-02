<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutLoginedRequest extends FormRequest
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
            'address'=>'required',
            'phone' =>'required|numeric',
            'payment' => 'required',
        ];
    }
    public function messages(){
        return [
            'address.required' => 'Bạn chưa nhập địa chỉ!',
            'phone.required' => 'Bạn chưa nhập số điện thoại!',
            'phone.numeric' => 'Số điện thoại phải là số!',
            'payment.required' => 'Bạn chưa chọn phương thức thanh toán!',
        ];
    }
}
