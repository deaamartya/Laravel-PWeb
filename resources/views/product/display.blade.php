@extends('layout.header')

@section('judul', 'Data Product')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_products.css">

    <div class="container">
        <div class="row">
            <div class="boxdisplay">
                <h1 class="dp">Data Product</h1>
                @if(auth()->user()->job_status == 'admin')
                <a href="/product/create" class="tb">Tambah Product</a>
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
                            @if(auth()->user()->job_status == 'admin')
                            <th scope="col">Product_id</th>
                            <th scope="col">Category Id</th>
                            @endif
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Stock</th>
                            @if(auth()->user()->job_status == 'admin')
                            <th scope="col">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $products as $pd)

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            @if(auth()->user()->job_status == 'admin')
                            <td>{{ $pd->product_id}}</td>
                            <td>{{ $pd->category_id}}</td>
                            @endif
                            <td>{{ $pd->product_name}}</td>
                            <td>{{ $pd->product_price}}</td>
                            <td>{{ $pd->product_stock}}</td>
                            @if(auth()->user()->job_status == 'admin')
                            <td>
                            <a href="/product/edit/{{ $pd->product_id}}" class="btn btn-info m-1">Edit</a>
                            <!-- <a href="/product/hapus/{{ $pd->product_id}}" class="btn btn-danger">Delete</a> -->
                            </td>
                            @endif
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                    </div>
            </div>
        </div>
    </div>
@endsection