<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">List Product</h4>
      </div>
      <div class="modal-body">
        <table border="1" width="100%">
          <thead>
            <td style="text-align:center"><b>Nama Barang</b></td>
            <td style="text-align:center"><b>Harga</b></td>
            <td style="text-align:center"><b>Action</b></td>
          </thead>
          @foreach( $products as $pd )
                  <!-- <tbody> -->
                  <tr style="height: 40px">
                  <td style="text-align:center">{{ $pd->product_name }}</td>
                  <td style="text-align:center">{{ $pd->product_price }}</td>
                  <td style="text-align:center"><button class="btn-info" id="select"
                    data-name = "{{ $pd->product_name }}"
                    data-price = "{{ $pd->product_price }}"
                    data-stock = "{{ $pd->product_stock }}">
                    <i class=""></i> Select</button>
                  </td>
                  </tr>
                  <!-- </tbody> -->
              @endforeach
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
<!-- ================================================================================================================== -->

<div class="boxtambah">
                <h1 class="ds">Tambah Sales</h1>
                <form method="post" action="/sales/display">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nota_id">Nota Id</label>
                        <input type="text" class="" id="nota_id"
                        placeholder="Input Nota Id" name="nota_id">

                        <label for="customer_id">Customer Id</label>
                        <select class="" name="customer_id" id="customer_id">
                            @foreach ($customers as $cm)
                                <option value="{{ $cm->customer_id }}">{{ $cm->customer_id }} 
                                    [{{ $cm->first_name }} {{ $cm->last_name }}]
                                </option>
                            @endforeach
                        </select>
                        <br>
                        <br>

                        <label for="nota_date">Nota Date</label>
                        <input type="date" class="" id="nota_date"
                        placeholder="Input Nota Date" name="nota_date">

                        <label for="user_id">User Id</label>
                        <select class="" name="user_id" id="user_id">
                            @foreach ($userss as $us)
                                <option value="{{ $us->user_id }}">{{ $us->user_id }} 
                                    [{{ $us->first_name }} {{ $us->last_name }}]
                                </option>
                            @endforeach
                        </select>

                        </div>
                    
               
            
            </div>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" onclick="modal()">Tambah Product</button>
<br>

<!-- <br>
<input type="text" id="myText" value="hallo" onkeyup="getVal(event)" onfocus="select()">
<br> -->
<br>
<div id="table">
  <div class="table-responsive">
    <table class="table text-center">
      <thead class="text-uppercase">
        <tr>
					<th style="text-align: center" scope="col">action</th>
          <th style="text-align: center" scope="col">Product</th>
          <th style="text-align: center" scope="col">Quantity</th>
          <th style="text-align: center" scope="col">Product Price</th>
					<th style="text-align: center" scope="col">Discount</th>
        </tr>
      </thead>
        <tbody>
        </tbody>
    </table>
                <div>
                <h3>Sub Total : Rp. <input type="number" id="subtotal" name="subtotal" value="0" readonly></h3>
                </div>

                <br>
      
               <div>
                  <h3>Total Discount : Rp. <input type="number" id="total_discount" name="total_discount" value="0" readonly></h3>
                </div>

                <br>
                
                <div>
                  <h3>Total Payment : Rp. <input type="number" id="total_payment" name="total_payment" value="0" readonly></h3>
                </div>

        <button type="submit" class="btn btn-success m-2">Submit</button>
        <a class="btn btn-danger m-2" href="/sales/display" role="button">Cancel</a>
  </div>
</div>
</form>


<script>
var colnum=0;
function modal()
{
    $("#myModal").modal("show");
    document.getElementById('inputProduct');
}

function pilihBarang(){
		$('#myModal').modal('show');
    // document.getElementById('inputProduct').value='';
    var table = document.getElementById('inputproduct');
    // var row = table.insertRow(table.rows.length);
    // var idrow = 'col'+colnum;
    // row.setAttribute('id',idrow);
    // colnum++;
  }
  $(document).ready(function(){
        $(document).on('click', '#select', function(){
      // var idrow = 'col'+colnum;
      // colnum++;

      var product_name = $("#product_name").val();
      var quantity = $("#quantity").val();
			var price = $("#product_price").val();
			var discount = $("#discount").val();
			var total_price = $("#total_price").val();
      var markup =
"<tr id='idrow'><td><button onclick='hapus()'>Delete</button></td>" +
"<td><input type='text' id='product_name' name='product_name' value='"+ product_name +"' style='background:transparent; border:none; text-align:center; width=100%' disabled></td>" +
"<td><input type='number' id='quantity' name='quantity' value='1' onkeyup='updateSubtotal(\''+idrow+'\')' onfocus='select()' style='background:transparent; border:none; text-align:center; width=100%'></td>" +
"<td><input type='number' id='product_price' name='product_price' value='"+ price +"' style='background:transparent; border:none; text-align:center; width=100%' disabled></td>" +
"<td><input type='number' id='discount' name='discount' value='0' onKeyUp='disc(event)' style='background:transparent; border:none; text-align:center; width=100%'></td>" +
"<td><input type='number' name='total_price' id='total_price' value='"+ total_price +"' style='background:transparent; border:none; text-align:center; width=100%' disabled></td></tr>";
            $("#table tbody").append(markup);
        });
    });
    $(document).ready(function(){
		$(document).on('click', '#select', function(){
			var product_name = $(this).data('name');
			var product_price = $(this).data('price');
			$('#product_name').val(product_name);
			$('#product_price').val(product_price);
			$('#total_price').val(product_price);

			$('#myModal').modal('hide');
		});
  });

  function hapus() {
  document.getElementById('idrow').remove();
  }

  function disc(event){
		if(event.keyCode == 13){
			var jumlah = document.getElementById('quantity').value;
			var hasil = (parseInt(jumlah) * parseInt(document.getElementById('product_price').value))
			- parseInt(document.getElementById('discount').value);
			$('#total_price').val(hasil);
		}
	}

  function updateSubtotal(id)
{
  
  //hanya menerima input angka
  
  var row = document.getElementById(id);
  var qty = row.childNodes[2].childNodes[0].value;    
  var harga = row.childNodes[1].childNodes[0].value;
  
  var subTot = harga*qty;

  var colSubTot = row.childNodes[3].childNodes[0];
  colSubTot.value = subTot;

  updateTotal();
    
}






</script>
