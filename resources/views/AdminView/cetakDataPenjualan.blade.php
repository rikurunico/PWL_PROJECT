
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
		<h2 class="text-center text-primary">Laporan Data Penjualan</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
            <th>ID</th>
            <th>User</th>
            <th>Nama Barang</th>    
            <th>Harga Satuan</th>         
            <th>Jumlah Item</th>						
            <th>Tanggal Transaksi</th>            
            </tr>
		</thead>
		<tbody>
            @foreach ($dataPenjualan as $dp)
            <tr>
            <td>{{ $dp->id}}</td>
            <td>{{ $dp->users->name}}</td>
            <td>{{ $dp->products->product}}</td>
            <td>{{ $dp->products->harga}}</td>
            <td>{{ $dp->qty}}</td>
            <td>{{ $dp->created_at}}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>