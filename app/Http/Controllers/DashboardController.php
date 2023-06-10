<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\News;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'products' => Product::all(),
            'count_news' => News::count(),
            'count_galleries' => Gallery::count(),
        ]);
    }
}
