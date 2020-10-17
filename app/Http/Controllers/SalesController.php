<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sales;
use App\User;
Use App\Customer;
use App\Product;
use App\Sales_Detail;
use PDF;

class SalesController extends Controller
{
    public function savepost(Request $request)
    {
        //insert ke tabel sales
        $saless = new Sales;
        $saless->nota_id = $request->nota_id;
        $saless->customer_id = $request->customer_id;
        $saless->user_id = $request->user_id;
        $saless->nota_date = $request->nota_date;
        $saless->total_payment = $request->total_payment;
        // dd($request->all());
        $saless->save();
        
        //insert ke tabel sales_detail
        foreach($request['product_id'] as $key){
            $sales_details = new Sales_Detail;
            $sales_details->nota_id = $request['nota_id'];
            $sales_details->product_id = $key;
            $sales_details->quantity = $request['quantity'][$key];
            $sales_details->selling_price = $request['selling_price'][$key];
            $sales_details->discount = $request['discount'][$key];
            $sales_details->total_price = $request['total_price'][$key];
            // dd($request->all());
            $sales_details->save();
        }

        return redirect('sales/display');
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        return view('sales/display', ['sales' => $sales]);
        // $userss = User::all();
        // $customers = Customer::all();
        // return view('sales/index', compact('userss', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $userss = User::all();
        // $customers = Customer::all();
        // $products = Product::all();
        // return view('sales/create', compact('userss', 'customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $saless = new Sales;
        // $saless->nota_id = $request->nota_id;
        // $saless->customer_id = $request->customer_id;
        // $saless->user_id = $request->user_id;
        // $saless->nota_date = $request->nota_date;
        // $saless->total_payment = $request->total_payment;
        // $saless->save();
        // return redirect('sales/display');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nota_id)
    {

        $sales = Sales::join('customers', 'customers.customer_id', '=', 'saless.customer_id')
                        ->join('userss', 'userss.id', '=', 'saless.user_id')
                        ->select(DB::raw('CONCAT(customers.first_name, " ", customers.last_name) AS full_name'), 'userss.first_name', 'userss.last_name', 'saless.*')
                        ->where('nota_id', $nota_id)->first();

        $sales_detail = Sales_Detail::join('products', 'products.product_id', '=', 'sales_details.product_id')
                                    ->select('products.product_name', 'sales_details.*')
                                    ->where('nota_id', $nota_id)->get();

        return view('sales/show', compact('sales', 'sales_detail'));
    }
    
    public function exportpdf($nota_id)
    {
        $sales = Sales::join('customers', 'customers.customer_id', '=', 'saless.customer_id')
                        ->join('userss', 'userss.id', '=', 'saless.user_id')
                        ->select(DB::raw('CONCAT(customers.first_name, " ", customers.last_name) AS full_name'), 'userss.first_name', 'userss.last_name', 'saless.*')
                        ->where('nota_id', $nota_id)->first();

        $sales_detail = Sales_Detail::join('products', 'products.product_id', '=', 'sales_details.product_id')
                                    ->select('products.product_name', 'sales_details.*')
                                    ->where('nota_id', $nota_id)->get();
                                    
        $pdf = PDF::loadView('sales/pdfview', compact('sales', 'sales_detail'));
        return $pdf->stream('invoice.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nota_id)
    {
        // $saless = Sales::where('nota_id', $nota_id)->first();
        // $userss = User::all();
        // $customers = Customer::all();
        // return view('sales/edit', compact('saless', 'userss', 'customers'));
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
        // $saless = Sales::where('nota_id', $nota_id)->update([
        //     'nota_id' => $request->nota_id,
        //     'customer_id' => $request->customer_id,
        //     'user_id' => $request->user_id,
        //     'nota_date' => $request->nota_date,
        //     'total_payment' => $request->total_payment
        //     ]);
        // return redirect('sales/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nota_id)
    {
        $sales_detail = Sales_detail::where('nota_id', $nota_id);
        $sales = Sales::where('nota_id', $nota_id);
        $sales_detail->delete();
        $sales->delete();
        return redirect('sales/display');;
    }
}
