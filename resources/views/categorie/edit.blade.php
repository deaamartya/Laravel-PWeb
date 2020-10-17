@extends('layout.header')

@section('judul', 'Form Edit Categorie')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_categories.css">

    <div class="container">
        <div class="row">
            <div class="box">
                <h1 class="ftc">Edit Categorie</h1>
                <form method="post" action="/categorie/update/{{ $categories->category_id }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_name">Nama Categori</label>
                        <input type="text" class="form-control" id="category_name"
                        placeholder="Masukan Nama Categori" name="category_name" 
                        value="{{ $categories->category_name }}" required>
                        <!-- <label for="status">Status</label><br>
                        <select id="status" name="category_status" value="{{ $categories->category_status }}">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select> -->
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/categorie/display" role="button">Cancel</a>
                </form>
            
            </div>
        </div>
    </div>
@endsection