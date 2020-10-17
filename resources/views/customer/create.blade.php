@extends('layout.header')

@section('judul', 'Form Tambah Customer')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_customers.css">

    <div class="container">
        <div class="row">
            <div class="boxtambah">
                <h1 class="dc">Tambah Customer</h1>
                <form method="post" action="/customer/display">
                {{ csrf_field() }}
                    <div class="form-group">
                        <!--<label for="customer_id">Customer Id</label>-->
                        <!--<input type="text" class="form-control" id="customer_id"-->
                        <!--placeholder="Input First Name" name="customer_id" required>-->
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name"
                        placeholder="Input First Name" name="first_name" required>
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name"
                        placeholder="Input Last Name" name="last_name" required>
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone"
                        placeholder="Input Phone" name="phone" required>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email"
                        placeholder="Input Email" name="email" required>
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street"
                        placeholder="Input Street" name="street" required>
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city"
                        placeholder="Input City" name="city" required>
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state"
                        placeholder="Input State" name="state" required>
                        <!-- <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code"
                        placeholder="Input Zip Code" name="zip_code" required> -->
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/customer/display" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection