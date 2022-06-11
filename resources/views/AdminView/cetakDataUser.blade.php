
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
		<h2 class="text-center text-primary">Data User</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Dibuat pada tanggal</th>
                <th>Terakhir diubah tanggal</th>
                <th>Role Akun</th>
            </tr>
		</thead>
		<tbody>
            @foreach ($dataUser as $dataUser)
            <tr>
                <td>{{ $dataUser->id}}</td>
                <td>{{ $dataUser->name}}</td>
                <td>{{ $dataUser->email}}</td>
                <td>{{ $dataUser->notelp}}</td>
                <td>{{ $dataUser->alamat}}</td>
                <td>{{ $dataUser->created_at}}</td>
                <td>{{ $dataUser->updated_at}}</td>
                <td>{{ $dataUser->level}}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>