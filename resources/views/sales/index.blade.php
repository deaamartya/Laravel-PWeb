<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--<link rel="stylesheet" type="text/css" href="/css/indexsales.css">-->
<style>
body {
    background: #34495e;
    /*color: white;*/
}
#box{
    margin-top: 30px;
    padding: 35px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    /*color: white;*/
    background: #000000;
    /*text-align: center;*/
    border-style: groove;
    /*border-color: #0099ff;*/
    border-color: white;
}
#dt {
    padding: 10px;
    text-align: center;
    border-bottom: 3px solid white;
    color: #21cf69;
    /*background-color: lightgrey;*/
     /*border-radius: 25px; */
}
#menu1 {
    text-align: center;
    width: 30%;
    float: left;
    padding: 15px;
    /*border: 1px solid red;*/
  }
  
#menu2 {
    text-align: center;
    width: 30%;
    float: right;
    padding: 15px;
    /*border: 1px solid red;*/
  }
#main {
    text-align: center;
    width: 30%;
    float: left;
    padding: 15px;
    /*border: 1px solid red;*/
  }
#menu4 {
    text-align: center;
    width: 30%;
    float: right;
    padding: 15px;
    /*border: 1px solid red;*/
  }
label {
    font-size: 18px;
    color: #21cf69;
}
#myText{
  border:0;
  background: none;
  display: block;
  margin-top: 10px;
  margin: 20px auto;
  text-align: center;
  border: 2px solid white;
  width: 100%;
  padding: 5px;
  outline: none;
  color: #21cf69;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
  font-size: 18px;
}
#sub {
    margin-left: 43%;
}
h5 {
    text-align: center;
    color: #21cf69;
}
h4 {
    color: #21cf69;
}
#keranjang {
    color: #21cf69;
    border-color: white;
}
#modal-content {
    background: black;
}
#tableModal {
    color: #21cf69;
    border-color: white;
}
#nota_id{
  border:0;
  background: none;
  display: block;
  margin: 2px auto;
  text-align: center;
  border: 2px solid white;
  width: 75%;
  padding: 5px;
  outline: none;
  color: #21cf69;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
}
#nota_date{
  border:0;
  background: none;
  display: block;
  margin: 2px auto;
  text-align: center;
  border: 2px solid white;
  width: 75%;
  padding: 5px;
  outline: none;
  color: #21cf69;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
}
#user_id{
  border:0;
  background: none;
  display: block;
  margin: 2px auto;
  text-align: center;
  border: 2px solid white;
  width: 75%;
  padding: 5px;
  outline: none;
  color: #21cf69;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
}
#customer_id{
  border:0;
  background: none;
  display: block;
  margin: 2px auto;
  text-align: center;
  border: 2px solid white;
  width: 75%;
  padding: 5px;
  outline: none;
  color: #21cf69;
  border-radius: 25px;
  transition: 0.50s;
  cursor: pointer;
}
</style>

<!-- Modal -->
<div class="container">
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div id="modal-content" class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">List Product</h4>
        </div>
        <div class="modal-body">
          <table class="table text-center" border="1" width="100%" id="tableModal">
            <thead>
              <td style="text-align:center"><b>Product Name</b></td>
              <td style="text-align:center"><b>Price</b></td>
            </thead>

          </table>
        </div>
        <div class="modal-footer">
          <button type="button" style="color: #21cf69; border-color: white; background:transparent" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- ================================================================================================================== -->
  <div id="box">
              <h1 id="dt">Detail Transaction</h1>
              <br>
              <form method="POST" action="/salespost">
                  {{ csrf_field() }}
                      <div id="form-group" class="form-group">

                        <div id="menu1">
                          <label class="nota_id" for="nota_id">Nota Id</label>
                          <br>
                          <input type="text" class="" id="nota_id" style="text-align:center"
                          placeholder="Input Nota Id" name="nota_id">
                        </div>

                        <div id="menu2">
                          <label class="user_id" for="user_id">User Id</label>
                          <br>
                          <select class="" name="user_id" id="user_id">
                          <option disabled selected readonly>- Pilih User -</option>
                              @foreach ($userss as $us)
                                  <option value="{{ $us->id }}">
                                      {{ $us->first_name }} {{ $us->last_name }}
                                  </option>
                              @endforeach
                          </select>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        <div id="main">
                          <label class="nota_date" for="nota_date">Nota Date</label>
                          <br>
                          <input type="date" class="" id="nota_date"
                          placeholder="Input Nota Date" name="nota_date" value="nota_date">
                        </div>
                        
                        <div id="menu4">
                          <label class="customer_id" for="customer_id">Customer Id</label>
                          <br>
                          <select class="" name="customer_id" id="customer_id">
                          <option disabled selected readonly>- Pilih Customer -</option>
                          @foreach ($customers as $cm)
                          <option value="{{ $cm->customer_id }}">
                            {{ $cm->first_name }} {{ $cm->last_name }}
                          </option>
                          @endforeach
                          </select>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        
                      </div>
              
  <!-- Trigger the modal with a button -->
  <!-- <br>-->
  <!--<button type="button" class="btn btn-info btn-lg" onclick="modal()">Add Product</button>-->
  <!--<br>-->
  <input type="text" class="myText" id="myText" placeholder="Search" onkeyup="getVal(event)" onfocus="select()">
  <h5><b>*CTRL + Enter for Search Product</b><h5>

  <br>
  <table class="table text-center" width="100%" border="1" id="keranjang">
    <thead class="text-uppercase">
      <tr>
        <th style="text-align:center" scope="col"><b>Name</b></th>
        <th style="text-align:center" scope="col"><b>Price</b></th>
        <th style="text-align:center" scope="col"><b>Quantity</b></th>
        <th style="text-align:center" scope="col"><b>Discount</b></th>
        <th style="text-align:center" scope="col"><b>Subtotal</b></th>
        <th style="text-align:center" scope="col"><b>Action</b></th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
      <td><input type="text" value="apaa" name="nyoba"></td>
      </tr>  -->
    </tbody>
  </table>
  <br>
  <br>
  <!-- <h2 class="text-uppercase">Total : Rp. <input type="text" name="total" id="total" value="0" readonly></h2> -->
  <h4 class="text-uppercase">Total Discount : Rp. <input type="number" name="total_discount" id="total_discount" value="0" style="background:transparent; border: none;" readonly></h4>
  <br>
  <h4 class="text-uppercase">Total Palyment : Rp. <input type="number" name="total_payment" id="total_payment" value="0" style="background:transparent; border: none;" readonly></h4>
  <br>
  <button style="color: #21cf69; border-color: white; background:transparent" type="submit" id="sub" class="btn m-2">Submit</button>
  <a style="color: #21cf69; border-color: white; background:transparent" class="btn m-2" id="cancel" href="/sales/display" role="button">Cancel</a>
  </form>
  </div>
</div>

<!-- ============================================================================================= -->
<script>
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
// =============================================================================================
var barang;
// =============================================================================================
// window.onload=function(){
//   document.getElementById('total').value=0;
// }

// var arrBarang = new Array(new Array(1, 'ciki', 1000),
//                           new Array(2, 'citos', 2000),
//                           new Array(3, 'curos', 2400),
//                           new Array(4, 'pelem', 3000),
//                           new Array(5, 'Fanta', 4500),
//                           new Array(6, 'sirup', 2000) );

var colnum=0;
// =============================================================================================
function modal()
{
    $("#myModal").modal("show");
}
// =============================================================================================
function getVal(event)
{  
    // console.log(event.keyCode);
    if(event.keyCode == 13 && 17)
    {
      var key = document.getElementById('myText').value;
      
      $.ajaxSetup({ 
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
            type:"POST",
            url:"/sales/index/getProduct",
            data:{
              "key":key,
              "_token": "{{ csrf_token() }}",//harus ada ini jika menggunakan metode POST
            },
            success : function(results) {
              // console.log(JSON.stringify(results)); //print_r
                // console.log(results.product[0].product_name);

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
// =============================================================================================
// function pilihBarang(id)
function pilihBarang(index)
{
  // for(var i=0; i<arrBarang.length; i++)
  // {
  //   if(arrBarang[i][0]==id)
  //     break;
  // }
  // console.log(arrBarang[i]);
  $("#myModal").modal("hide");

  var table = document.getElementById('keranjang').getElementsByTagName('tbody')[0];

  var flag=-1;

  var id = barang.product[index].product_id;
  var nama_barang = barang.product[index].product_name;
  var harga = barang.product[index].product_price;
  var stok = barang.product[index].product_stock;

  for(var z=1; z<table.rows.length; z++)
  {
    if(table.rows[z].childNodes[0].childNodes[2].value == id)
    {
      flag = z;
      break;
    }
  }

  if(flag != -1)
  {
    var colQty = table.rows[flag].childNodes[2].childNodes[1];
    colQty.value = parseInt(colQty.value) + 1;
    var idrow = table.rows[flag].id;
    hitungTotalPrice(idrow);

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

    //nama barang
    cel_1.innerHTML = '<input type="text" name="barang[]" value="'+nama_barang+'" style="background:transparent; border:none; text-align:center; width=100%" readonly>\
                       <input type="hidden" name="product_id['+id+']" value="'+id+'">';
    //harga persatu barang
    cel_2.innerHTML = '<input type="number" class="selling_price" id="selling_price'+id+'" name="selling_price['+id+']" value="'+harga+'" style="text-align:center; background:transparent; border:none; width=100%" readonly>';
    //banyaknya barang
    cel_3.innerHTML = '<button type="button" class="btn ctrl__button ctrl__button--decrement" onclick="min(\''+id+'\')" style="color: #21cf69; border-color: white; background:transparent" > - </button>\
                       <input id="qty'+id+'" min="1" max="'+stok+'" type="number" class="quantity qtyinput" name="quantity['+id+']" value="1" oninput="hitungDiskon(\''+id+'\')" onfocus="select()" style="background:transparent; border-color: white; text-align:center; width=100%" >\
                       <button type="button" class="btn ctrl__button ctrl__button--increment" onclick="plus(\''+id+'\')" style="color: #21cf69; border-color: white; background:transparent" > + </button>';
    //discon yg diberi
    cel_4.innerHTML = '<input type="number" value="0" min="0" max="100" oninput="hitungDiskon(\''+id+'\')" id="percentDisc'+id+'" onfocus="select()" style="color: #21cf69; background:transparent; border-color: white; text-align:center; width=100%" required> \
                       <input type="hidden" value="0" class="discount dis" name="discount['+id+']" id="discount'+id+'" > %';
    //total harga(harga barang * banyak barang)
    cel_5.innerHTML = '<input type="number" name="total_price['+id+']" class="total_price" id="total_price'+id+'" value="'+harga+'" style="background:transparent; border:none; text-align:center; width=100%" readonly> ';
    //action
    cel_6.innerHTML = '<button onclick="hapusEl(\''+idrow+'\')" style="background:transparent; color:#21cf69">Delete</button>';

  }

  updateTotal();
}
// =============================================================================================
function min(idProduct){
 var id_qty = $("#qty"+idProduct).val();
 if(id_qty > 1){
    id_qty--;
 }
  $("#qty"+idProduct).val(id_qty);
  hitungDiskon(idProduct);
}
// =============================================================================================
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
// =============================================================================================
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
  hitungTotalPrice(idProduct);
}
// =============================================================================================
function hitungTotalPrice(idProduct)
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
// =============================================================================================
 function updateTotal() {

    var selling_price = document.getElementsByClassName("selling_price");
    var quantity = document.getElementsByClassName("quantity");

    var subtotal=0;
    for (var i=0; i<selling_price.length; i++ ){
      subtotal = subtotal + Number(parseInt(selling_price[i].value * quantity[i].value));
      
    }
  
    document.getElementById('total_payment').value;


    var discounts = document.getElementsByClassName("discount");

    var total_disc = 0;
    for (var j=0; j< discounts.length; j++ ){
      total_disc = total_disc + Number(discounts[j].value);
    }

    
    document.getElementById('total_discount').value = total_disc;

    document.getElementById('total_payment').value = subtotal - total_disc;


  };
// =============================================================================================
function hapusEl(idRow)
{
  document.getElementById(idRow).remove();

  updateTotal();
}
</script>