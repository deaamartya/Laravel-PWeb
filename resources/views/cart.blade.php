@extends('layout/mainku')

@section('title', 'Data Sale') 

@section('head')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection 

@section('content') 

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <table border="1" width="100%" id="tableModal">
          <thead>
            <th style="text-align:center"><b>Product Name</b></th>
            <th style="text-align:center"><b>Product Price</b></th>
          </thead>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div class="card">
 
  <div class="card-header" style="background-color: #EEE8AA">
      <h1 class="judul-data"><b> Detail Transaction</b></h1> 
  </div>

    <div class="card-body" style="background-color: #FFFFE0; width: 100%; height: 100%;">
    <form action="/sales" method="post" id="catForm">
        @csrf
        <input type="hidden" name="nota_id" value="{{$nota_id}}">
        <h1 style="font-size: 18px; padding: 20px 0px 0px 48px;"><b> #ID Nota : {{$nota_id}} </b></h1>
        <div class="row" style="padding-left: 20px;">
          <div class="col-md-3">
             <div class="form-group" style="padding: 25px 40px 25px 25px; font-size: 18px;">
                  <div class="card_area" style="vertical-align: top; margin-left: 5px;">
                      <label for="nota_date"><i class='far fa-calendar-alt' style='font-size:18px'></i> Date </label>  
                    <div class="form-group">
                      <input type="date" id="nota_date" name="nota_date" style="background:transparent; border: none; " readonly> 
                    </div>
                  </div>

                    <div style="vertical-align: top; width: 30%">
                      <div class="row" style="margin-left: 5px;"><label for="user"><i class='fas fa-user-circle' style='font-size:18px'></i> User</label>
                        </div>
                    </div>
                  
                      <div style="margin-left: 5px;" class="form-group">
                         <input type="hidden" name="user_id" value="{{@session('user_id')}}"> {{@session('first_name')}} {{@session('last_name')}}
                      </div> 
                 
              </div>
            </div>


        <div class="col-md-4">
           <div class="form-group" style="padding: 25px 40px 25px 25px;">

                    <div style="vertical-align: top;">
                      <label for="customer" style="font-size:18px;"><i class='fas fa-user-alt' style='font-size:18px'></i> Customer</label>
                      <br>
                      <label><b style="font-size: 12px;">*Wajib Diisi</b></label>
                    </div>
            
                      <div>
                        <select id="customer_id" name="customer_id" class=" @error('customer_id') is-invalid @enderror" style="width: 18em; height: 2.5em; font-size: 16px;" value="{{old('customer_id')}}" >
                          <option disabled selected readonly>- Pilih Customer -</option>
                           @foreach ($customers as $customer)
                            <option value="{{ $customer->customer_id }}">
                              {{ $customer->first_name }} {{ $customer->last_name }}
                            </option>
                          @endforeach
                        </select>
                        @error('customer_id') 
                          <div class="invalid-feedback form-error" >
                            {{ $message }}
                          </div>
                          @enderror
                      </div>

           </div>
         </div>



        <div class="col-md-5">
           <div class="form-group" style="padding: 25px 40px 25px 25px;">
            
              <div style="vertical-align: top;">
                <div style="margin-left: -14px;">
              <label for="product_id" style="font-size: 18px;"><i class="fa fa-product-hunt" style="font-size:18px; "></i> Select Product</label>
               <br>
              <label><b style="font-size: 12px;">*Wajib Diisi</b></label>
               </div>
               
               <div class="row">
                <input type="text" id="myText" value="" onkeydown="enterVal(event)" onfocus="select()" style="width: 15em; height: 2.5em; font-size: 16px;" placeholder=" Search.."><button type="button" class="add-row btn btn-flat btn-warning" value="" onclick="getVal()"><span class="glyphicon glyphicon-search"></span></button>
              </div>
               <br>
               
               <!-- <input type="text" id="myText" value="" onfocus="select()"> -->
              </div>
                
             

              
          
            </div>
        </div>
    </div>


    <br>

<table border="1" id="keranjang" style="width: 90%;">
  <thead>
    <th scope="col" style="width: 30%;">Product Name</th>
    <th scope="col" style="width: 20%;">Selling Price</th>
    <th scope="col" style="width: 15%;">Quantity</th>
    <th scope="col" style="width: 10%;">Discount</th>
    <th scope="col" style="width: 20%;">Total Price</th>
    <th scope="col" style="padding-left: 10px; padding-right: 10px;">Action</th>
    
  </thead>
</table>
<br>
<br>

         <div class="row" style="padding-left: 25px;">
            <div style="padding: 10px 40px 25px 25px;" >
                <div>
                <h1 style="font-size: 18px ">Sub Total : Rp. <input type="number" id="subtotal" name="subtotal" value="0" style="background:transparent; border: none;" readonly > </h1>
                </div>

                <br>
      
               <div>
                  <h1 style="font-size: 18px ">Total Discount : Rp. <input type="number" id="total_discount" name="total_discount" value="0" style="background:transparent; border: none;" readonly> </h1>
                </div>

                <br>
                
                 <div>
                    <h1 style="font-size: 18px ">Total Payment : Rp. <input type="number" id="total_payment" name="total_payment" value="0" style="background:transparent; border: none;"readonly> </h1>
                  </div>

              </div>
         </div>
            <div style="padding-left: 940px;">
                <input type="submit" class="btn btn-flat btn-lg-10 btn-success" value="Submit">
            </div>

            <br>
         </form> 
     </div>
</div> 


@endsection


@section('tambahan')
<!--

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
-->

<script type="text/javascript">

  $(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if (month < 10) 
        month = "0" + month;
    if (day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#nota_date').val(today);
});
  
 var barang;

window.onload=function(){
  document.getElementById('total_payment').value=0;
}



var colnum=0;

function modal()
{
    $("#myModal").modal("show");
}

function getVal()
{  
    
      var key = document.getElementById('myText').value;

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
            type:"POST",
            url:"/sales/getProduct",
            data:{
              "key":key,
              "_token": "{{ csrf_token() }}",//harus ada ini jika menggunakan metode POST
            },
            success : function(results) {
              //console.log(JSON.stringify(results)); //print_r
                //console.log(results.product[0].product_name);

              barang = results;
              var table = document.getElementById('tableModal');

              while(table.rows.length > 1)
              {
                table.deleteRow(1);
              }

              for(var i=0; i<results.product.length; i++)
              {
                var row = table.insertRow(table.rows.length);
                row.style.cursor="pointer";
                row.setAttribute("onclick","pilihBarang('"+i+"')");

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = '<td style="text-align:center">'+results.product[i].product_name+'</td>';
                cell2.innerHTML = '<td style="text-align:center">'+results.product[i].product_price+'</td>';
              }

              modal();
             
            },
            error: function(data) {
                console.log(data);
            }
      });
    
}


function enterVal(event)
{  
    if(event.keyCode==13)
    {
      event.preventDefault();
      var key = document.getElementById('myText').value;

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
            type:"POST",
            url:"/sales/getProduct",
            data:{
              "key":key,
              "_token": "{{ csrf_token() }}",//harus ada ini jika menggunakan metode POST
            },
            success : function(results) {
              //console.log(JSON.stringify(results)); //print_r
                //console.log(results.product[0].product_name);

              barang = results;
              var table = document.getElementById('tableModal');

              while(table.rows.length > 1)
              {
                table.deleteRow(1);
              }

              for(var i=0; i<results.product.length; i++)
              {
                var row = table.insertRow(table.rows.length);
                row.style.cursor="pointer";
                row.setAttribute("onclick","pilihBarang('"+i+"')");

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = '<td style="text-align:center">'+results.product[i].product_name+'</td>';
                cell2.innerHTML = '<td style="text-align:center">'+results.product[i].product_price+'</td>';
              }

              modal();
             
            },
            error: function(data) {
                console.log(data);
            }
      });
    }
}



//function pilihBarang(id)
function pilihBarang(index) 
{
  $("#myModal").modal("hide");

  var table = document.getElementById('keranjang');

  var flag=-1;

  var id = barang.product[index].product_id;
  var nama_barang = barang.product[index].product_name;
  var harga = barang.product[index].product_price;
  var stok = barang.product[index].product_stock;

  for(var z=1; z<table.rows.length; z++)
  {
    //console.log(table.rows[z].childNodes[0].childNodes[2].value);
    if(table.rows[z].childNodes[0].childNodes[2].value == id)
    {
      flag=z; 
      break;
    }
  }

  if(flag != -1)//ketika ada product yg sama dipilih
  {
    var id_qty = parseInt($("#qty"+id).val());
      //console.log(id_qty);
     var stok = parseInt($("#qty"+id).attr('max'));
     //console.log(stok);
     if(id_qty < stok){
        id_qty++;
     }
    $("#qty"+id).val(id_qty);
    //console.log(flag);
    hitungDiskon(id);



    
  }
  else
  {
    var row = table.insertRow(table.rows.length);
    var idrow = 'col'+colnum;
    row.setAttribute('id',idrow);
    colnum++;

    var cel_1=row.insertCell(0);
    var cel_2=row.insertCell(1);
    var cel_3=row.insertCell(2);
    var cel_4=row.insertCell(3);
    var cel_5=row.insertCell(4);
    var cel_6=row.insertCell(5);


    cel_1.innerHTML = '<input type="text" name="barang[]" value="'+nama_barang+'" style="background:transparent; border:none; text-align:center; width:100%" readonly>\
                        <input type="hidden" name="product_id['+id+']" id="idBarang" value="'+id+'">';
    cel_2.innerHTML = 'Rp. <input type="number" class="selling_price" name="selling_price['+id+']" value="'+harga+'" readonly style="width:30%; text-align:center; background:transparent; border:none; " id="selling_price'+id+'">';
    cel_3.innerHTML = ' <button type="button" class="btn ctrl__button ctrl__button--decrement btn-warning" onclick="min(\''+id+'\')" >- </button>\
    <input id="qty'+id+'" min="1" max="'+stok+'" type="number" class="quantity qtyinput" name="quantity['+id+']" value="1" oninput="hitungDiskon(\''+id+'\')" onfocus="select()" >\
    <button class="btn ctrl__button ctrl__button--increment btn-warning" type="button" onclick="plus(\''+id+'\')">+</button>';
    cel_4.innerHTML = '<input type="number" value="0" min="0" max="100" oninput="hitungDiskon(\''+id+'\')" id="percentDisc'+id+'" style="width:50%; text-align:center;" required> \
    <input type="hidden" value="0" class="discount dis" name="discount['+id+']" id="discount'+id+'" > %';
    cel_5.innerHTML = 'Rp. <input type="number" name="total_price['+id+']" class="total_price" id="total_price'+id+'" value="'+harga+'" readonly style="width:30%; background:transparent; border:none; text-align:center; "> ';
    cel_6.innerHTML = '<button class="btn btn-danger btn_remove" onclick="hapusEl(\''+idrow+'\')" style="margin-left : 0px;">X</button>';




  }

  //console.log(index);
  hitungDiskon(id);

} 



function min(idProduct){
 var id_qty = $("#qty"+idProduct).val();
 if(id_qty > 1){
    id_qty--;
 }
  $("#qty"+idProduct).val(id_qty);
  hitungDiskon(idProduct);
}

function plus(idProduct){
 var id_qty = parseInt($("#qty"+idProduct).val());
 //console.log(id_qty);
 var stok = parseInt($("#qty"+idProduct).attr('max'));
 //console.log(stok);
 if(id_qty < stok){
    id_qty++;
 }
  $("#qty"+idProduct).val(id_qty);
  hitungDiskon(idProduct);
}

function hapusEl(idrow)
{
    document.getElementById(idrow).remove();
    updateTotal();

}


function hitungDiskon(idProduct){
  
  var qty = parseInt($("#qty"+idProduct).val());  
  var harga = parseInt($("#selling_price"+idProduct).val()); 
  
  var total_price = (harga*qty);

  //console.log(total_price);

  var percent = parseInt($("#percentDisc"+idProduct).val());
  //console.log(percent);
  var diskon = parseInt((percent/100) * total_price);
  //console.log(diskon);
  $("#discount"+idProduct).val(diskon);
  hitungTotPrice(idProduct);
}


function hitungTotPrice(idProduct)
{
  
  //hanya menerima input angka

  var qty = parseInt($("#qty"+idProduct).val());  
  var harga = parseInt($("#selling_price"+idProduct).val()); 
  var diskon = parseInt($("#discount"+idProduct).val()); 
  //console.log(diskon);

  var totPrice = (harga*qty) - diskon;
  //console.log(totPrice);

  $("#total_price"+idProduct).val(totPrice);


  updateTotal();

}


 function updateTotal() {

    var selling_price = document.getElementsByClassName("selling_price");
    var quantity = document.getElementsByClassName("quantity");

    var subtotal=0;
    for (var i=0; i<selling_price.length; i++ ){
      subtotal = subtotal + Number(parseInt(selling_price[i].value * quantity[i].value));
      
    }
  
    document.getElementById('subtotal').value=subtotal;


    var discounts = document.getElementsByClassName("discount");

    var total_disc = 0;
    for (var j=0; j< discounts.length; j++ ){
      total_disc = total_disc + Number(discounts[j].value);
    }

    
    document.getElementById('total_discount').value = total_disc;

    document.getElementById('total_payment').value = subtotal - total_disc;


  };



  </script>



@endsection

