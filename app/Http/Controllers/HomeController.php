<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->get();
        return view('mainpage.homepage',$product);
    }
}
