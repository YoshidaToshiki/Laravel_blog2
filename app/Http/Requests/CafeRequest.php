<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeRequest extends FormRequest
{
    // authorized関数は今回は不要なので、コメントアウト
    // public function authorize()
    // {
    //     return false;
    // }
    
    // rules関数：返却するバリデーションを適用するルールを記載する。
    // 書式：'キー名'　=> 'ルール1｜ルール2｜ルール3'
    // キー名はname属性にして、入れ子になっている場合は「.」でつなぐ。
    // ルールが複数ある場合は、「|(パイプ)」でつなぐ。
    public function rules()
    {
        return [
            'review.title' => 'required|string|max:100',
            'review.body' => 'required|string|max:4000',
            'review.stars' => 'required'
        ];
    }
}