<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public Function test(){
      return view('about');
    }
    public Function fine(){
      return view('blog');
    }
  public Function boy(){
      return view('contact');
    }
    public Function dan(){
      return view('course');
    }
    public Function chi(){
      return view('index');
    }
    public Function mon(){
      return view('single-blog');
    }








}
