<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Review;
use App\Models\Cafe;

class ReviewController extends Controller
{
    public function create(Cafe $cafe)
    {
        return view('cafes.create')->with([
            'cafe' =>$cafe
            ]);
    }
    
    public function store(CafeRequest $request, Review $review, Cafe $cafe)
    {
        $validated = $request ->validate([
            'review.title' => 'required|string|max:100',
            'review.body' => 'required|string|max:4000',
            'review.stars' => 'required'
            ]);
        // $request['review']で、reviewをキーにもつリクエストパラメータを取得
        // $requestのキーは、各入力項目のname属性（create.blade）と一致
        // $input = ['title'=>タイトル,'body'=>レビュー内容,'stars'=>評価]の配列型式となる。
        $input = $request['review'];
        // 保存処理：Reviewインスタンスのプロパティを指定（fill関数）して、
        // 受け取ったキーごとに上書き（save関数）する。
        $review->fill($input)->save();
        // 保存したcafeのidを含んだURLにリダイレクト
        return redirect('/cafes/{cafe}' . $review->id);
    }
    
    
}
