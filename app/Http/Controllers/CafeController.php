<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Menu;

class CafeController extends Controller
{
    public function index(Cafe $cafe)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('cafes.index')->with([
            'cafes' =>$cafe->getPaginateByLimit()
        ]);
    //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
    public function create(Menu $menu)
    {
        return view('cafes.create')->with([
            'menu' => $menu->get()
        ]);
    }
    public function show(Cafe $cafe, Menu $menus)
    {
        return view('cafes.show')->with([
            'cafe'  => $cafe,
            'menus' => $cafe->getByMenu()
            ]);
    }
}
