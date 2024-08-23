<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'kana' => ['required', 'regex:/^[ァ-ヾ]+$/u','max:50'],
            'tel' => ['required', 'max:20', 'unique:customers,tel'],
            'email' => ['required', 'email', 'max:255', 'unique:customers,email'],
            'postcode' => ['required', 'max:7'],
            'address' => ['required', 'max:100'],
            'birthday' => ['date'],
            'gender' => ['required'],
            'memo' => ['max:1000'],
            ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.max' => '名前は50文字以内で入力してください。',

            'kana.required' => 'カナは必須です。',
            'kana.regex' => 'カナは全角カタカナで入力してください。',
            'kana.max' => 'カナは50文字以内で入力してください。',

            'tel.required' => '電話番号は必須です。',
            'tel.max' => '電話番号は20文字以内で入力してください。',
            'tel.unique' => 'この電話番号はすでに登録されています。',

            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'email.unique' => 'このメールアドレスはすでに登録されています。',

            'postcode.required' => '郵便番号は必須です。',
            'postcode.max' => '郵便番号は7文字以内で入力してください。',

            'address.required' => '住所は必須です。',
            'address.max' => '住所は100文字以内で入力してください。',

            'birthday.date' => '有効な日付を入力してください。',

            'gender.required' => '性別は必須です。',

            'memo.max' => 'メモは1000文字以内で入力してください。',
        ];
    }
}
