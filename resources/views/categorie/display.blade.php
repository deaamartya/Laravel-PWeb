@extends('layout.header')

@section('judul', 'Data Categorie')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_categories.css">
<!-- ================================================================= -->
<!-- ================================================================= -->
<!-- ================================================================= -->
<div class="container">
        <div class="row">
            <div class="boxx">
                <h1 class="ftc">Data Categorie</h1>
                @if(auth()->user()->job_status == 'admin')
                <a href="/categorie/create" class="tambah">Tambah Categorie</a>
                @endif
                <br>

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('success') }}</strong>
                </div>
                @endif

                @if(session()->has('warning'))
                <div class="alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('warning') }}</strong>
                </div>
                @endif

                @if(session()->has('danger'))
                <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('danger') }}</strong>
                </div>
                @endif

                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <!-- <th scope="col">Id_Kategori</th> -->
                            <th scope="col">Nama_Kategori</th>
                            <th scope="col">Status</th>
                            @if(auth()->user()->job_status == 'admin')
                            <th scope="col">Tindakan</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $categories as $ca)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <!-- <td>{{ $ca->category_id}}</td> -->
                            <td>{{ $ca->category_name}}</td>
                            <td>{{ $ca->category_status}}</td>
                            <td>
                            @if(auth()->user()->job_status == 'admin')
                            <a href="/categorie/edit/{{ $ca->category_id }}" class="btn btn-info">Edit</a>
                             <a href="/categorie/hapus/{{ $ca->category_id }}" class="btn btn-danger">Delete</a> 
                            <a href="/categorie/status/{{ $ca->category_id }}" class="btn btn-warning">Status</a>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection