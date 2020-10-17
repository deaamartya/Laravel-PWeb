@extends('layout.header')

@section('judul', 'Form Tambah User')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_userss.css">

    <div class="container">
        <div class="row">
            <div class="boxtambah">
                <h1 class="du">Tambah User</h1>
                <form method="post" action="/user/display">
                {{ csrf_field() }}
                    <div class="form-group">
                        
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name"
                        placeholder="Input First Name" name="first_name" >
                        
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name"
                        placeholder="Input Last Name" name="last_name" >
                        
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone"
                        placeholder="Input Phone" name="phone" >
                        
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email"
                        placeholder="Input Email" name="email" >
                        
                        <label for="password">Password</label>
                    	<input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
                    	@if ($errors->has('password'))
                        <div class="invalid-feedback">
                    	    {{ $errors->first('password') }}
                    	</div>
                    	@endif
	  
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password_confirmaton') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
                    	@if ($errors->has('password_confirmation'))
                    	<div class="invalid-feedback">
                    	    {{ $errors->first('password_confirmation') }}
                    	</div>
                    	@endif
                    	
                    	<!--<label for="Job_Status">Status</label>-->
                     <!--   <input type="text" class="form-control" id="job_status"-->
                     <!--   placeholder="Input Status" name="job_status" value="admin">-->
                    	
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/user/display" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection