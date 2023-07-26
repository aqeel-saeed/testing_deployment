<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        $name = request()->name;
        if ($name) {
            return "hello " . $name ."!";
        } else {
            return "hello you!";
        }
    }
}
