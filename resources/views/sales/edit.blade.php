@extends('layout.header')

@section('judul', 'Edit Sales')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_saless.css">

    <div class="container">
        <div class="row">
            <div class="boxedit">
                <h1 class="ds">Edit Sales</h1>
                <form method="post" action="/sales/update/{{ $saless->nota_id }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nota_id">Nota Id</label>
                        <input type="text" class="form-control" id="nota_id"
                        placeholder="Input Nota Id" name="nota_id" value="{{ $saless->nota_id }}">

                        <label for="customer_id">Customer Id</label>
                        <select class="form-control" name="customer_id" id="customer_id">
                            @foreach ($customers as $cm)
                                <option value="{{ $cm->customer_id }}">{{ $cm->customer_id }} 
                                    [{{ $cm->first_name }} {{ $cm->last_name }}]
                                </option>
                            @endforeach
                        </select>

                        <label for="user_id">User Id</label>
                        <select class="form-control" name="user_id" id="user_id">
                            @foreach ($userss as $us)
                                <option value="{{ $us->user_id }}">{{ $us->user_id }} 
                                    [{{ $us->first_name }} {{ $us->last_name }}]
                                </option>
                            @endforeach
                        </select>

                        <label for="nota_date">Nota Date</label>
                        <input type="date" class="form-control" id="nota_date"
                        placeholder="Input Nota Date" name="nota_date" value="{{ $saless->nota_date }}">
                        <label for="total_payment">Total Payment</label>
                        <input type="number" class="form-control" id="total_payment"
                        placeholder="Input Total Payment" name="total_payment" value="{{ $saless->total_payment }}">
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/sales/display" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection