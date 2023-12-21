<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Area;

class AreaController extends Controller
{
    public function region(Area $area,Cafe $cafe)
    {
        return view('areas.region')->with([
            'cafes' => $area->getByCafe(),
            'area'  => $area
            ]);
    }
}
