<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hero(){
        return view('pages.hero');
    }
    public function About_Me(){
        return view('pages.About-Me');
    }
    public function My_Work(){
        return view('pages.My-Work');
    }
    public function My_Learning(){
        return view('pages.My-Learning');
    }
    public function Portfolio(){
        return view('pages.Portfolio');
    }
    
}
