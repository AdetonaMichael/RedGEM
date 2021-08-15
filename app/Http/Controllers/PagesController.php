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

    public function checkout(){
        return view('checkout');
    }
    public function privacy_policy(){
        return view('privacy_policy');
    }

}
