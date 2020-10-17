<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Categorie;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/display', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('product/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;
        $products->category_id = $request->category_id;
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_stock = $request->product_stock;
        $products->save();
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('product/display');
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
    public function edit($product_id)
    {
        $products = Product::where('product_id', $product_id)->first();
        $categories = Categorie::all();
        return view('product/edit', ['products' => $products], ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $products = Product::where('product_id', $product_id)->update([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_stock' => $request->product_stock
            ]);
        session()->flash('warning', 'Data Berhasil Di Update!');
        return redirect('product/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $products = Product::where('product_id', $product_id);
        $products->delete();
        session()->flash('danger', 'Data Berhasil Di Hapus!');
        return redirect('product/display');
    }
}
