<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = DB::table('user')->get();
        $userss = User::all();
        return view('user/display', ['userss' => $userss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required|min:3',
            'phone'=>'min:12',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        
        $userss = new User;
        $userss->first_name = $request->first_name;
        $userss->last_name = $request->last_name;
        $userss->phone = $request->phone;
        $userss->email = $request->email;
        $userss->password = bcrypt($request->password);
        $userss->job_status = "customer";
        $userss->save();
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('user/display');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userss = User::where('id', $id)->first();
        return view('user/edit', ['userss' => $userss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userss = User::where('id', $id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'job_status' => $request->job_status
            ]);
        session()->flash('warning', 'Data Berhasil Di Update!');
        return redirect('user/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userss = User::where('id', $id);
        $userss->delete();
        session()->flash('danger', 'Data Berhasil Di Hapus!');
        return redirect('user/display');
    }
}
