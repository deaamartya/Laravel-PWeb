<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        // return view('categorie/display', compact('categories'));
        return view('categorie/display', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'category_id' => 'required',
        //     'category_name' => 'required'
        //  ]);

        $categories = new Categorie;
        $categories->category_name = $request->category_name;
        $categories->category_status = "Active";
        $categories->save();
        session()->flash('success', 'Data Berhasil Di Tambahkan!');
        return redirect('categorie/display');
    }

    /**
     * turn status
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($category_id)
    {
        $categories = Categorie::where('category_id', $category_id)->first();
        $now = $categories->category_status;
        if($now == 'Active'){
            $categories = Categorie::where('category_id', $category_id)->update(['category_status'=>'Inactive']);
        } else{
            $categories = Categorie::where('category_id', $category_id)->update(['category_status'=>'Active']);
        }
        session()->flash('warning', 'Status Berhasil Di Update!');
        return redirect('categorie/display');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $categories = Categorie::where('category_id', $category_id)->first();
        return view('categorie/edit', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $categories = Categorie::where('category_id', $category_id)->update(
            ['category_name' => $request->category_name]);
        session()->flash('warning', 'Data Berhasil Di Update!');
        return redirect('categorie/display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        // Categorie::destroy($category_id);
        // $categories = Categorie::find($category_id);
        // $categories->delete();
        // return redirect('/categori/display')->with('status', 'categorie removed!');
        
        $categories = Categorie::where('category_id', $category_id);
        $categories->delete();
        session()->flash('danger', 'Data Berhasil Di Hapus!');
        return redirect('/categorie/display');
    }
}
