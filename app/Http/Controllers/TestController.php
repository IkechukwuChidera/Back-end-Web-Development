<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //method
    public function test (){
        return view ('test');
    }
    public function category (){
        return view ('category');
    }
    public function  elements(){
        return view ('elements');
    }
    public function  get($n){
        return view ('loveth');
    }
    public function  blog(){
        return view ('blog-details');
    }


}
