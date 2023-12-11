<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Menu;

class MenuController extends Controller
{
    // public function index(Menu $menus)
    // {
    //     return view('menus.index')->with([
    //         'menus' =>$menus
    //     ]);
    // }
    
    public function show( Menu $menus,Cafe $cafe)
    {
        return view('cafes.show')->with([
            'menus' => $cafe->getByMenu(),
            'cafe'  => $cafe
            ]);
    }
    
}