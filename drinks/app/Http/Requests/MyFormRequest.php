<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class MyFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255', Rule::exists(User::class, 'name')],
            'phone' => ['string', 'max:50', Rule::exists(User::class, 'phone')],
            'sname' => ['string', 'max:255', Rule::exists('shops', 'sname')],
            'amount' => ['integer', 'numeric'],
            // 'amount' => ['required', 'numeric', 'min:1', 'max:50', 'not_in:0'],
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.exists' => '請輸入正確姓名。',
            'phone.exists' => '請輸入正確電話。',
            'sname.exists' => '門市名稱不存在。',
            'amount.integer' => '請輸入整數。',
            'amount.numeric' => '請輸入有效的數字。',
            // 'amount.required' => '請輸入數量。',
            // 'amount.min' => '數量不能小於:min。',
            // 'amount.max' => '數量不能大於:max。',
            // 'amount.not_in' => '數量不能為0。',
        ];
    }
}
