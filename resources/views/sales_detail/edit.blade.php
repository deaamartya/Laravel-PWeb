@extends('layout.header')

@section('judul', 'Edit Sales Detail')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_sales_details.css">

    <div class="container">
        <div class="row">
            <div class="boxedit">
                <h1 class="sd">Edit Sales Detail</h1>
                <form method="post" action="/sales_detail/display">
                {{ csrf_field() }}
                    <div class="form-group">

                        <label for="nota_id">Nota Id</label>
                        <select class="form-control" name="nota_id" id="nota_id">
                            @foreach ($saless as $sl)
                                <option value="{{ $sl->nota_id }}">{{ $sl->nota_id }}
                                </option>
                            @endforeach
                        </select>
                        
                        <label for="product_id">Product Id</label>
                        <select class="form-control" name="product_id" id="product_id">
                            @foreach ($products as $pd)
                                <option value="{{ $pd->product_id }}">{{ $pd->product_id }} 
                                    [{{ $pd->product_name }}]
                                </option>
                            @endforeach
                        </select>

                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity"
                        placeholder="Input Quantity" name="quantity">
                        <label for="selling_price">Selling_price</label>
                        <input type="number" class="form-control" id="selling_price"
                        placeholder="Input Selling Price" name="selling_price">
                        <label for="discount">Discount</label>
                        <input type="text" class="form-control" id="discount"
                        placeholder="Input Discount" name="discount">
                        <label for="total_price">Total_price</label>
                        <input type="text" class="form-control" id="total_price"
                        placeholder="Input Total Price" name="total_price">
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/sales_detail/display" role="button">Cancel</a>
                </form>
            
            </div>
        </div>
    </div>
@endsection