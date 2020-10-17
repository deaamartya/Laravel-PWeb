@extends('layout.header')

@section('judul', 'Detail Sales')

@section('container')

<style>
#btn {
  margin-left: 20px;
}

</style>

<div class="card">
        <div class="card-header">

            <h3 style="text-align:center">
                <b>Detail Transaction</b>
            </h3>

        </div>
        <div class="card-body">

            <h5 style="text-align:center" scope="col">Date : {{$sales->nota_date}}</h5>
            <h5 style="text-align:center" scope="col">Nota Id : {{$sales->nota_id}}</h5>
            <br>
            <h5 style="text-align:left" scope="col">User : {{$sales->first_name}} {{$sales->last_name}}</h5>
            <h5 style="text-align:left" scope="col">Customer : {{$sales->full_name}}</h5>
                                        
            <table class="table table-bordered table-white">
                <thead class="thead-light">
                    <tr>
                        <th style="text-align:center" scope="col">No</th>
                        <th style="text-align:center" scope="col">Product</th>
                        <th style="text-align:center" scope="col">Quantity</th>
                        <th style="text-align:center" scope="col">Selling Price</th>
                        <th style="text-align:center" scope="col">Discount</th>
                        <th style="text-align:center" scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $sales_detail as $sd)
                    <tr>
                        <th style="text-align:center" scope="col">{{ $loop->iteration }}</th>
                        <td style="text-align:center" scope="col">{{ $sd->product_name}}</td>
                        <td style="text-align:center" scope="col">{{ $sd->quantity}} Pcs</td>
                        <td style="text-align:center" scope="col">Rp. {{ $sd->selling_price}} /Pcs</td>
                        <td style="text-align:center" scope="col">Rp. {{ $sd->discount}}</td>
                        <td style="text-align:center" scope="col">Rp. {{ $sd->total_price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h4 style="text-align:left" class="text-uppercase" scope="col">Total Payment : Rp. {{$sales->total_payment}}</h4>
            
        </div>

    </div>

    <br>

    <a href="/exportpdf/{{ $sales->nota_id}}" id="btn" class="btn btn-outline-info btn-lg"> Print </a>
    <a href="/sales/display" class="btn btn-outline-danger btn-lg m-1"> Back </a>

@endsection