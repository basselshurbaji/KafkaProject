<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class HelloWorldController extends Controller
{
    function test1(){
        return response()->json("Hello World 1");
    }

    function test2(){
        return response()->json("Hello World 2");
    }

    function test3(){
        return response()->json("Hello World 3");
    }
}
