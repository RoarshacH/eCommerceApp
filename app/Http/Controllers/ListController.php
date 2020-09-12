<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Products::inRandomOrder()->take(9)->get();
         return view('list')->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
         $product = Products::where('slug',$slug)->firstOrFail();
         return view('product')->with('product',$product);

    }

}
