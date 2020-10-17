@extends('layout.header')

@section('judul', 'Data Sales')

@section('container')

<!--<link rel="stylesheet" type="text/css" href="/css/form_saless.css">-->
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: #34495e;
}
/* edit create */
/* .boxtambah{
    width: 1600px;
    padding: 40px;
    position: relative;
    margin-top: 50px;
    left: 50%;
    transform: translate(-50%);
    background: #000000;
    text-align: center;
    border-style: groove;
    border-color: #0099ff;
} */
.boxedit{
    width: 490px;
    padding: 40px;
    position: relative;
    top: 420px;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #000000;
    text-align: center;
    border-style: groove;
    border-color: #0099ff;
}
/* display */
.boxdisplay{
  width: 1500px;
  padding: 45px;
  position: relative;
  margin-top: 50px;
  background: #000000;
  text-align: center;
  border-style: groove;
  border-color: #0099ff;
}
/* title */
.ds{
    font-family: Gill Sans;
    color: white;
    text-transform: capitalize;
    text-align: center;
}
/* a{
  font-family: Gill Sans;
    color: white;
} */
tr{
  font-family: Gill Sans;
    color: white;
}
/* nama form */
label{
  font-family: Gill Sans;
  color: white;
  text-align: center;
}
/* inputan form */
/* .form-group input[type = "text"],.form-group input[type = "number"],.form-group input[type = "date"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #0099ff;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.50s;
} */
/* .form-group input[type = "text"]:focus,.form-group input[type = "number"]:focus,
.form-group input[type = "date"]:focus,.form-group select:focus{
  width: 280px;
  border-color: #00ff6a;
} */
/* .form-group select{
  background: none;
  margin: 20px auto;
  border-radius: 24px;
  text-align: center;
  border: 2px solid #0099ff;
  width: 200px;
  color: white;
  transition: 0.50s;
} */
.tb{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #21cf69;
  padding: 10px;
  width: 170px;
  outline: none;
  color: white;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
  font-size: 20px;
}
.tb:hover{
  background: #21cf69;
  color: white;
}
.notaid{
  width: 400px;
}
</style>

    <div class="container">
        <div class="row">
            <div class="boxdisplay">
                <h1 class="ds">Data Sales</h1>

                <a href="/sales/index" class="tb">Tambah Sales</a>
                <!-- <a href="/categori/update" class="btn btn-info my-3">Update Categori</a> -->
                
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nota_id</th>
                            <th scope="col">Customer_id</th>
                            <th scope="col">User_id</th>
                            <th scope="col">Nota_date</th>
                            <th scope="col">Total_payment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $sales as $sl)

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $sl->nota_id}}</td>
                            <td>{{ $sl->customer_id}}</td>
                            <td>{{ $sl->user_id}}</td>
                            <td>{{ $sl->nota_date}}</td>
                            <td>{{ $sl->total_payment}}</td>
                            <td>
                            <a href="/sales/show/{{ $sl->nota_id }}" class="btn btn-info">Detail</a>
                            @if(auth()->user()->job_status == 'admin')
                            <a href="/sales/hapus/{{ $sl->nota_id }}" class="btn btn-danger">Delete</a>
                            @endif
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection