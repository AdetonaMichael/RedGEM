<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function resource(){
        return view('resource');
    }
    public function redtokinomics(){
        return view('redtokinomics');
    }
    public function checkout(){
        return view('checkout');
    }

}
