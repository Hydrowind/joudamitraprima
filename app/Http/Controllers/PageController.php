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
        // return view('home2');
    }

    public function store(Request $request){
        $keyword = $request->sort;

        $data = Product::all();
        if($keyword == 'highest_price'){
            $data = $data->sortByDesc('price')->values()->all();
        } else if($keyword == 'lowest_price'){
            $data = $data->sortBy('price')->values()->all();
        } else if($keyword == 'most_popular'){
            $data = $data->sortByDesc('rating')->values()->all();
        } 

        return view('store', ['data' => $data]);
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
