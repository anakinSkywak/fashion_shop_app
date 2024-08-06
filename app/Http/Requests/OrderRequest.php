<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten_nguoi_nhan' => 'required|string|max:225',
            'email_nguoi_nhan' => 'required|string|email|max:225',
            'so_dien_thoai_nguoi_nhan' => [
                'required',
                'string',
                'regex:/^(84|0[3|5|7|8|9])+([0-9]{8})\b$/',
                'max:10'
            ],
            'dia_chi_nguoi_nhan' => 'required|string|max:225',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'ten_nguoi_nhan.required' => 'Tên người nhận là bắt buộc.',
            'ten_nguoi_nhan.string' => 'Tên người nhận phải là một chuỗi ký tự.',
            'ten_nguoi_nhan.max' => 'Tên người nhận không được vượt quá 225 ký tự.',
            
            'email_nguoi_nhan.required' => 'Địa chỉ email là bắt buộc.',
            'email_nguoi_nhan.string' => 'Địa chỉ email phải là một chuỗi ký tự.',
            'email_nguoi_nhan.email' => 'Địa chỉ email phải hợp lệ.',
            'email_nguoi_nhan.max' => 'Địa chỉ email không được vượt quá 225 ký tự.',
            
            'so_dien_thoai_nguoi_nhan.required' => 'Số điện thoại là bắt buộc.',
            'so_dien_thoai_nguoi_nhan.string' => 'Số điện thoại phải là một chuỗi ký tự.',
            'so_dien_thoai_nguoi_nhan.regex' => 'Số điện thoại phải bắt đầu bằng 84 hoặc 03, 05, 07, 08, 09 và có 10 chữ số.',
            'so_dien_thoai_nguoi_nhan.max' => 'Số điện thoại không được vượt quá 10 ký tự.',
            
            'dia_chi_nguoi_nhan.required' => 'Địa chỉ nhận hàng là bắt buộc.',
            'dia_chi_nguoi_nhan.string' => 'Địa chỉ nhận hàng phải là một chuỗi ký tự.',
            'dia_chi_nguoi_nhan.max' => 'Địa chỉ nhận hàng không được vượt quá 225 ký tự.',
        ];
    }
}
