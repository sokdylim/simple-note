<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){
        return view('test');
    }
    
    public function back(){
        return view('welcome');
    }

    public function aboutme(){
        return view('aboutme');
    }

    public function contactme(){
        return view('contactme');
    }

    public function myhobby(){
        return view('myhobby');
    }
}
