<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function store(){
        return view('store');
    }

    public function about(){
        return view('about');
    }

    public function news(){
        return view('news');
    }
    
    public function newsdetail(){
        return view('newsdetail');
    }

    public function gallery(){
        return view('gallery');
    }

    public function login(){
        return view('login');
    }

}
