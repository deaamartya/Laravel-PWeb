@extends('layout.header')

@section('judul', 'Form Tambah Categorie')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_categories.css">

    <div class="container">
        <div class="row">
            <div class="box">
                <h1 class="ftc">Tambah Categorie</h1>
                <form method="post" action="/categorie/display">
                    <div class="form-group">
                        <!--<label for="id">Id Categorie</label>-->
                        <!--<input type="text" class="form-control"-->
                        <!--placeholder="Masukan Id Categorie" name="category_id" required>-->
                        <label for="name">Nama Categorie</label>
                        <input type="text" class="form-control"
                        placeholder="Masukan Nama Categorie" name="category_name" required>
                        <!-- <label for="status">Status</label><br>
                        <input type="text" class="form-control" value="Active" name="category_status"> -->
                        <!-- <select id="status" name="category_status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select> -->
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    {{ csrf_field() }}
                    <a class="btn btn-danger m-2" href="/categorie/display" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
