<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanphamRequest extends FormRequest
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
    public function rules()
    {
        return [
            'ten_san_pham' => 'required|string|max:255',
            'so_luong' => 'required|integer|min:0',
            'gia' => 'required|numeric|min:0',
            'mo_ta' => 'nullable|string',
            'danh_mucs_id' => 'required|exists:danh_mucs,id',
        ];
    }
    public function messages():array
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm là trường bắt buộc.',
            'so_luong.required' => 'Số lượng là trường bắt buộc.',
            'so_luong.integer' => 'Số lượng phải là số nguyên.',
            'gia.required' => 'Giá là trường bắt buộc.',
            'gia.numeric' => 'Giá phải là một số.',
            'danh_mucs_id.required' => 'Danh mục là trường bắt buộc.',
            'danh_mucs_id.exists' => 'Danh mục không tồn tại.',
        ];
    }
}
