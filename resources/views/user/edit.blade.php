@extends('layout.header')

@section('judul', 'Form Edit User')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_userss.css">

    <div class="container">
        <div class="row">
            <div class="boxedit">
                <h1 class="du">Edit User</h1>
                <form method="post" action="/user/update/{{ $userss->id }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <!--<label for="first_name">Name</label>-->
                        <!--<input type="text" class="form-control" id="name"-->
                        <!--placeholder="Input Name" name="name" value="{{ $userss->name }}" required>-->
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name"
                        placeholder="Input First Name" name="first_name" value="{{ $userss->first_name }}" required>
                        
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name"
                        placeholder="Input Last Name" name="last_name" value="{{ $userss->last_name }}">
                        
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone"
                        placeholder="Input Phone" name="phone" value="{{ $userss->phone }}" >
                        
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email"
                        placeholder="Input Email" name="email" value="{{ $userss->email }}" required>
                        
                        <!-- <label for="password">Password</label>
                        <input type="text" class="form-control" id="password"
                        placeholder="Input Password" name="password" value="{{ $userss->password }}"> -->
                        
                        <label for="Job_Status">Status</label>
                        <input type="text" class="form-control" id="job_status"
                        placeholder="Input Status" name="job_status" value="admin" required>
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/user/display" role="button">Cancel</a>
                </form>
            
            </div>
        </div>
    </div>
@endsection