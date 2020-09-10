<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MathController extends Controller
{
    //足し算を行う
    public function sum($x, $y) {
        $sum = $x + $y;
        return view::make('sum', ['x' => $x, 'y' => $y, 'sum' => $sum]);
    }
}
