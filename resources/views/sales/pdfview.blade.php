<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Invoice.pdf</title>

<style>
#pdf {
  font-family: Gill Sans;
  border-collapse: collapse;
  width: 100%;
  font-size: 15px;
}

#pdf td, #pdf th {
  border: 1px solid #ddd;
  padding: 8px;
}

#pdf th {
  background-color: lightgray;
  color: black;
}
</style>

</head>
<body>
    <div class="card">
        <div class="card-body">

            <h1 style="text-align:center">
                <b>Detail Transaction</b>
            </h1>

            <h4 style="text-align:center" scope="col">Date : {{$sales->nota_date}}</h4>
            <h4 style="text-align:center" scope="col">Nota Id : {{$sales->nota_id}}</h4>
            <br>
            <h4 style="text-align:left" scope="col">User : {{$sales->first_name}} {{$sales->last_name}}</h4>
            <h4 style="text-align:left" scope="col">Customer : {{$sales->full_name}}</h4>
                                        
            <!-- <table class="table table-bordered table-white"> -->
            <table id="pdf">
                <!-- <thead class="thead-light"> -->
                <thead>
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
                        <td style="text-align:center" scope="col">{{ $loop->iteration }}</td>
                        <td style="text-align:center" scope="col">{{ $sd->product_name}}</td>
                        <td style="text-align:center" scope="col">{{ $sd->quantity}} Pcs</td>
                        <td style="text-align:center" scope="col">Rp.{{ $sd->selling_price}}/Pcs</td>
                        <td style="text-align:center" scope="col">Rp.{{ $sd->discount}}</td>
                        <td style="text-align:center" scope="col">Rp.{{ $sd->total_price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br>
            <h2 style="text-align:left" class="text-uppercase" scope="col">Total Payment : Rp. {{$sales->total_payment}}</h2>
            
        </div>

    </div>
</body>
</html>