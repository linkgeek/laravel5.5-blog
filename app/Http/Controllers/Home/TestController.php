<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test1() {
        $arr1 = $arr2 = range(1, 5);
        shuffle($arr1);
        shuffle($arr2);
        dump($arr1, $arr2, array_merge($arr2, $arr1));
    }
}
