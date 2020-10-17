@extends('layout.header')

@section('border', 'Data User')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_userss.css">

    <div class="container">
        <div class="row">
            <div class="boxdisplay">
                <h1 class="du">Data User</h1>
                 <a href="/user/create" class="tb">Tambah User</a>

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
                             <!--<th scope="col">Id</th> -->
                            <!--<th scope="col">Name</th>-->
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                             <th scope="col">Phone</th> 
                            <!--<th scope="col">Password</th>-->
                             <th scope="col">Status</th> 
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $userss as $us)

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                             <!--<td>{{ $us->id}}</td> -->
                            <!--<td>{{ $us->name}}</td>-->
                             <td>{{ $us->first_name}}</td>
                            <td>{{ $us->last_name}}</td>
                            <td>{{ $us->email}}</td>
                             <td>{{ $us->phone}}</td> 
                            <!--<td>{{ $us->password}}</td>-->
                             <td>{{ $us->job_status}}</td> 
                            <td>
                            <a href="/user/edit/{{ $us->id }}" class="btn btn-info m-1">Edit</a>
                             <!--<a href="/user/hapus/{{ $us->id }}" class="btn btn-danger">Delete</a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection