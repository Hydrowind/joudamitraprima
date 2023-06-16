<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', ['data' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();

        $data->name = $request->name;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->price = $request->price;
        $data->rating = $request->rating;

        $file = $request->file('image');
        $file->move('assets/uploads', $file->getClientOriginalName());

        $data->imageUrl = '/assets/uploads/' . $file->getClientOriginalName();

        if ($data->save()) {
            return redirect()->route('product.index');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.edit', ['data' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);

        $data->name = $request->name;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->price = $request->price;
        $data->rating = $request->rating;

        $file = $request->file('image');
        if ($file) {
            $file->move('assets/uploads', $file->getClientOriginalName());
            $data->imageUrl = '/assets/uploads/' . $file->getClientOriginalName();
        }

        if ($data->save()) {
            return redirect()->route('product.index');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }
}
