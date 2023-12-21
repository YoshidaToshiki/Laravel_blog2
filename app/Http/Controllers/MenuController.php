<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Cafe;
use App\Models\Menu;
use App\Models\Review;

class MenuController extends Controller
{
    // public function index(Menu $menus)
    // {
    //     return view('menus.index')->with([
    //         'menus' =>$menus
    //     ]);
    // }
    
    // public function show( Menu $menus, Cafe $cafe, Review $reviews )
    // {
    //     return view('cafes.show')->with([
    //         'menus' => $cafe->getByMenu(),
    //         'reviews' => $cafe->getByReview(),
    //         'cafe'  => $cafe
    //     ]);
    // }

}