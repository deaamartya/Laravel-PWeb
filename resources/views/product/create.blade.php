@extends('layout.header')

@section('judul', 'Form Add Product')

@section('container')

<link rel="stylesheet" type="text/css" href="/css/form_products.css">

    <div class="container">
        <div class="row">
            <div class="boxtambah">
                <h1 class="dp">Tambah Product</h1>
                <form method="post" action="/product/display">
                {{ csrf_field() }}
                    <div class="form-group">
                        <!--<label for="product_id">Product Id</label>-->
                        <!--<input type="text" class="form-control" id="product_id"-->
                        <!--placeholder="Input Product Id" name="product_id" required>-->

                        <label for="category_id">Cateorie Id</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $ca)
                                <option value="{{ $ca->category_id }}">
                                    {{ $ca->category_name }}
                                </option>
                            @endforeach
                        </select>

                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name"
                        placeholder="Input Product Name" name="product_name" required>
                        <label for="product_price">Product Price</label>
                        <input type="number" class="form-control" id="product_price"
                        placeholder="Input Product Price" name="product_price" required>
                        <label for="product_stock">Product Stock</label>
                        <input type="number" class="form-control" id="product_stock"
                        placeholder="Input Product Stock" name="product_stock" required>
                    </div>
                    <button type="submit" class="btn btn-success m-2">Submit</button>
                    <a class="btn btn-danger m-2" href="/product/display" role="button">Cancel</a>
                </form>
            
            </div>
        </div>
    </div>
@endsection