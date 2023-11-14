<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class PostController extends Controller
{
    public function index(Cafe $cafe)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return view('cafes.index')->with(['cafes' => $cafe->getPaginateByLimit()]);
    //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
    //
}
