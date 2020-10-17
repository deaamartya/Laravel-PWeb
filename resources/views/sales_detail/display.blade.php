@extends('layout.header')

@section('judul', 'Data Sales Detail')

@section('container')
<link rel="stylesheet" href="amado/css/core-style.css">
    <link rel="stylesheet" href="amado/style.css">
<link rel="stylesheet" type="text/css" href="/css/form_sales_details.css">

    <div class="container">
        <div class="row">
            <div class="boxdisplay">
                <h1 class="sd">Data Sales Detail</h1>
                <a href="/sales_detail/create" class="tb">Tambah Sales detail</a>
                
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nota_id</th>
                            <th scope="col">Product_id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Selling_price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Total_price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $sales_detail as $sd)

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $sd->nota_id}}</td>
                            <td>{{ $sd->product_id}}</td>
                            <td>{{ $sd->quantity}}</td>
                            <td>{{ $sd->selling_price}}</td>
                            <td>{{ $sd->discount}}</td>
                            <td>{{ $sd->total_price}}</td>
                            <td>
                            <a href="/sales_detail/edit/{{ $sd->nota_id }}" class="btn btn-info m-1">Edit</a>
                            <a href="/sales_detail/hapus/{{ $sd->nota_id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        
    </div>
@endsection