<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','You should login first');
        }
        else{
            $product = DB::table('products')->get();
            return view('mainpage.homepage',$product);
        }
        
    }
}
