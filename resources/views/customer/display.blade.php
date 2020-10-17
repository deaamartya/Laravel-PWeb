@extends('layout.header')

@section('judul', 'Data Customer')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_customers.css">

    <div class="container">
        <div class="row">
            <div class="boxdisplay">
                <h1 class="dc">Data Customer</h1>
                <a href="/customer/create" class="tb">Tambah Customer</a>
                
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
                        <!-- <th scope="col">Customer_Id</th> -->
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Street</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <!-- <th scope="col">Zip_Code</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach( $customers as $cm)

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <!-- <td>{{ $cm->customer_id}}</td> -->
                        <td>{{ $cm->first_name}}</td>
                        <td>{{ $cm->last_name}}</td>
                        <td>{{ $cm->phone}}</td>
                        <td>{{ $cm->email}}</td>
                        <td>{{ $cm->street}}</td>
                        <td>{{ $cm->city}}</td>
                        <td>{{ $cm->state}}</td>
                        <!-- <td>{{ $cm->zip_code}}</td> -->
                        <td>
                        <a href="/customer/edit/{{ $cm->customer_id }}" class="btn btn-info m-1">Edit</a>
                        <!-- <a href="/customer/hapus/{{ $cm->customer_id }}" class="btn btn-danger">Delete</a> -->
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection

