<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Review;
use App\Models\Cafe;

class ReviewController extends Controller
{
    
    // 作成画面表示
    public function create(Cafe $cafe)
    {
        return view('reviews.create')->with([
            'cafe' =>$cafe
        ]);
    }
    
    // 登録処理
    public function store(CafeRequest $request, Cafe $cafe, Review $review)
    {
        // 画面からデータを取得
        $input = $request['review'];
        // 評価対象のカフェ
        $input['cafe_id'] = $cafe->id;
        // ログインしているユーザ
        $input['user_id'] = Auth::id();
        
        // 保存処理
        $review->fill($input)->save();
        
        // カフェ詳細画面の下部にレビューを表示している場合は、カフェの詳細画面に遷移するべき
        return redirect('/cafes/' . $cafe->id );
    }
    
    
}
