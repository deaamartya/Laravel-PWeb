<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;

class DashboardController extends Controller
{
    public function home(){

        $total = Sales::where('nota_date');
        return view('/home');
    }
}
