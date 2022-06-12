
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
		<h2 class="text-center text-primary">Data Supplier</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                
             
            </tr>
		</thead>
		<tbody>
            @foreach ($datasupplier as $datasupplier)
            <tr>
                <td>{{ $datasupplier->id}}</td>
                <td>{{ $datasupplier->nama}}</td>
                <td>{{ $datasupplier->alamat}}</td>
                <td>{{ $datasupplier->telp}}</td>
               
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>