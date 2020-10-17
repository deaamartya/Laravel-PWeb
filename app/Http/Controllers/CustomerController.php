<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customer = DB::table('customers')->get();
        $customers = Customer::all();
        return view('customer/display', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new Customer;
        $customers->first_name = $request->first_name;
        $customers->last_name = $request->last_name;
        $customers->phone = $request->phone;
        $customers->email = $request->email;
        $customers->street = $request->street;
        $customers->city = $request->city;
        $customers->state = $request->state;
        $customers->zip_code = $request->zip_code;
        $customers->save();
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('customer/display');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($customer_id)
    {
        $customers = Customer::where('customer_id', $customer_id)->first();
        return view('customer/edit', ['customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer_id)
    {
        $customers = Customer::where('customer_id', $customer_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code
            ]);
        session()->flash('warning', 'Data Berhasil Di Update!');
        return redirect('customer/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer_id)
    {
        $customers = Customer::where('customer_id', $customer_id);
        $customers->delete();
        session()->flash('danger', 'Data Berhasil Di Hapus!');
        return redirect('/customer/display');
}
}