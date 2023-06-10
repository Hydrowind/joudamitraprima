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

    public function store(Request $request){
        $keyword = $request->sort;

        $data = Product::all();
        if($keyword == 'highest_price'){
            $product = $data->sortByDesc('price')->values()->all();
        } else if($keyword == 'lowest_price'){
            $product = $data->sortBy('price')->values()->all();
        } 

        return view('store', ['data' => $product]);
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
