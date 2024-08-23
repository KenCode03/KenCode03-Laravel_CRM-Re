<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => ['required','string','max:10'],
            'memo' => ['nullable'],
            'price' => ['required','numeric','min:0',],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名は必須です。',
            'name.string' => '商品名は文字列でなければなりません。',
            'name.max' => '商品名は最大10文字までです。',
            'price.required' => '価格は必須です。',
            'price.numeric' => '価格は数値でなければなりません。',
            'price.min' => '価格は 0 以上でなければなりません。',
        ];
    }
}