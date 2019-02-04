<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Input,Config;

class ProductContoller extends Controller
{
    var $rp=2;
    public function __construct(){
        $this->rp = Config::get('app.result_per_page');
    }
    public function index(){
        $products = Product::paginate($this->rp);
            return view('product/index',compact('products'));
    }
    public function search(){
        $query = Input::get('q');
        if($query){
            $products=Product::where('code','like','%' .$query.'%')
            ->orWhere('name','like','%'.$query.'%')
            ->get();
        }
        else {
            $products = Product::all();
        }
        return view('product/index',compact('products'));
    }
}

