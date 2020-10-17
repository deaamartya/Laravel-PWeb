<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sales_Detail;
use App\Sales;
use App\Product;

class Sales_DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales_detail = Sales_Detail::all();
        return view('sales_detail/display', ['sales_detail' => $sales_detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $saless = Sales::all();
        // $products = Product::all();
        // return view('sales_detail/create', ['saless' => $saless], ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $sales_details = new Sales_Detail;
        // $sales_details->nota_id = $request->nota_id;
        // $sales_details->product_id = $request->product_id;
        // $sales_details->quantity = $request->quantity;
        // $sales_details->selling_price = $request->selling_price;
        // $sales_details->discount = $request->discount;
        // $sales_details->total_price = $request->total_price;
        // $sales_details->save();
        // return redirect('sales_detail/display');
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
    public function edit($nota_id)
    {
        // $sales_details = Sales_Detail::where('nota_id', $nota_id)->first();
        // $saless = Sales::all();
        // $products = Product::all();
        // return view('sales_detail/edit', ['saless' => $saless], ['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nota_id)
    {
        // $sales_details = Sales_Detail::where('nota_id', $nota_id)->update([
        //     'nota_id' => $request->nota_id,
        //     'product_id' => $request->product_id,
        //     'quantity' => $request->quantity,
        //     'selling_price' => $request->selling_price,
        //     'discount' => $request->discount,
        //     'total_price' => $request->total_price
        //     ]);
        // return redirect('sales_detail/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nota_id)
    {
        $sales_details = Sales_Detail::where('nota_id', $nota_id);
        $sales_details->delete();
        return redirect('sales_detail/display');;
    }
}
