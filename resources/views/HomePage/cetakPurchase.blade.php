
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<
    </head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h2 class="text-center text-primary">Laporan Purchase Anda</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
            <th>Kode Transaksi</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Quantity</th>
            <th>Tanggal Beli</th>
            <th>Note</th>
             
            </tr>
		</thead>
		<tbody>
            @foreach ($transaksi as $transaksi)
            <tr>
            <td> {{$transaksi->id}}</td>
            <td> {{$transaksi->products->product}}
            <td> {{$transaksi->products->harga}}</td>
            <td> {{$transaksi->qty}}</td>                                   
            <td> {{$transaksi->Tanggal_beli}}</td>
            <td> {{$transaksi->note}}</td>
               
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>