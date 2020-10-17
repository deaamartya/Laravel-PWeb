<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
Use App\Customer;
class C_ajax extends Controller
{
    function index(){
        $userss = User::all();
        $customers = Customer::all();
        return view('sales/index', compact('userss', 'customers'));
    }
    function getProduct(request $req){
        $product = Product::where('product_name', 'like', '%'.$req->key.'%')->get();
        return response()->json(['product'=>$product]);
    }
}
