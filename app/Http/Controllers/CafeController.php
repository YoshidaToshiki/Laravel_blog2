<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Area;
use App\Models\Cafe;
use App\Models\Menu;
use App\Models\Review;

class CafeController extends Controller
{
    public function index(Cafe $cafes)//インポートしたCafeをインスタンス化して$cafeとして使用。
    {
        return view('cafes.index')->with([
            'cafes' =>$cafes->getPaginateByLimit()
        ]);
    //getPaginateByLimit()はCafe.phpで定義したメソッドです。
    }
    
    // MenuControllerへ移行するためコメントアウト
    public function show(Cafe $cafe, Menu $menus, Review $reviews)
    {
        // dd($cafe ->reviews);
        return view('cafes.show')->with([
            'menus' => $cafe->getByMenu(),
            'reviews' => $cafe->getByReview(),
            'cafe'  => $cafe
        ]);
    }
    
    // public function region(Cafe $cafe, Area $area)
    // {
    //     // dd($cafe ->reviews);
    //     return view('cafes.region')->with([
    //         'areas' => $area,
    //         'cafe'  => $area->getByCafe()
    //         ]);
    // }
    
    // public function store(CafeRequest $request, Cafe $cafe) {
    //     // 画面で入力された値を受け取る
    //     $input = $request['cafe'];
        
    //     // 画面で入力された値を保存
    //     $cafe->fill($input)->save();
        
    //     return redirect('/cafes/' . $cafe->id);
    // }
    
}
