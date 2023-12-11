<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Menu;

class CafeController extends Controller
{
    public function index(Cafe $cafe)//インポートしたCafeをインスタンス化して$cafeとして使用。
    {
        return view('cafes.index')->with([
            'cafes' =>$cafe->getPaginateByLimit()
        ]);
    //getPaginateByLimit()はCafe.phpで定義したメソッドです。
    }
    
    // MenuControllerへ移行するためコメントアウト
    // public function show(Cafe $cafe, Menu $menus)
    // {
    //     return view('cafes.show')->with([
    //         'cafe'  => $cafe,
    //         'menus' => $cafe->getByMenu()
    //         ]);
    // }
    
}
