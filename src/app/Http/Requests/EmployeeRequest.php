<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:employees,email',
            'age' => 'required|integer|min:18|max:60',
            'department' => 'required|in:営業,開発,総務,人事',
            'joined_date' => 'required|date|before_or_equal:today',
        ];
    }

    public function messages(){
        return[
            'name.required' => '名前は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.unique' => 'このメールアドレスはすでに登録されています。',
            'age.min' => '年齢は18歳以上である必要があります。',
            'age.max' => '年齢は60歳以下である必要があります。',
            'department.required' => 'いずれか部署を選択してください。',
            'joined_date.before_or_equal' => '入社日は今日以前の日付を入力してください。',
        ];
    }
}
