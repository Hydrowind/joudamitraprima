<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Product;
use App\Models\Gallery;

class PageController extends Controller
{
    public function home(){
        return view('home', ['data' => Gallery::all()]);
    }

    public function store(){
        return view('store', ['data' => Product::all()]);
    }

    public function about(){
        return view('about');
    }

    public function news(){
        return view('news', ['data' => News::all()]);
    }
    
    public function newsdetail($id){
        return view('newsdetail', ['data' => News::find($id)]);
    }

    public function gallery(){
        return view('gallery');
    }

    public function login(){
        return view('login');
    }

}
