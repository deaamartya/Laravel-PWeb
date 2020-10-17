@extends('layout.header')

@section('judul', 'Form Edit Customer')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_customers.css">

    <div class="container">
        <div class="row">
            <div class="boxedit">
                <h1 class="dc">Edit Customer</h1>
                <form method="post" action="/customer/update/{{ $customers->customer_id }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name"
                        placeholder="Input First Name" name="first_name" value="{{ $customers->first_name }}" required>
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name"
                        placeholder="Input Last Name" name="last_name" value="{{ $customers->last_name }}" required>
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone"
                        placeholder="Input Phone" name="phone" value="{{ $customers->phone }}" required>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email"
                        placeholder="Input Email" name="email" value="{{ $customers->email }}" required>
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street"
                        placeholder="Input Street" name="street" value="{{ $customers->street }}" required>
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city"
                        placeholder="Input City" name="city" value="{{ $customers->city }}" required>
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state"
                        placeholder="Input State" name="state" value="{{ $customers->state }}" required>
                        <!-- <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code"
                        placeholder="Input Zip Code" name="zip_code" value="{{ $customers->zip_code }}" required> -->
                        
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/customer/display" role="button">Cancel</a>
                </form>
            
            </div>
        </div>
    </div>
@endsection