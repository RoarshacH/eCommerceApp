<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Product::inRandomOrder()->take(8)->get();
        $products = Products::inRandomOrder()->take(8)->get();
        return view('index')->with("products", $products);
    }
}
