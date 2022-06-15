@extends('AdminView.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Penguna</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable akun pada toko</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('CreateUser') }}" class="btn btn-outline-success" style="margin: 10px"><i class="fas fa-edit"> Input User</i></a>
            <a href="{{ route('CetakDataUser') }}" class="btn btn-outline-danger"><i class="fas fa-edit"> Export To PDF</i></a>
          </div>
        </div>
        <br>
    
      
      <!-- /.card-header -->
      <div class="card-body" style="overflow-x:auto;">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Dibuat pada tanggal</th>
            <th>Role Akun</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($dataMember as $member)
          <tr>
            <td>{{ $member->id}}</td>
            <td>
              <img src="{{ asset('storage/'. $member->foto)}}" class="img-fluid img-thumbnail" style="width: 60px; margin-top: -6px;">
            </td>
            <td>{{ $member->name}}</td>
            <td>{{ $member->email}}</td>
            <td>{{ $member->notelp}}</td>
            <td>{{ $member->alamat}}</td>
            <td>{{ $member->created_at}}</td>
            <td>{{ $member->level}}</td>
            <td>
              <!-- Button trigger modal -->
            
              <a href="{{ route('EditUser', $member->id) }}" class="btn btn-md btn-info">Edit</a>
        
          <a href="{{ route('DeletePengguna', $member->id) }}" class="btn btn-md btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">
            Delete
          </a>
        </td>
          
            </td>
          </tr>
          @endforeach
          </tfoot>
        </table>
        
        <br>
        {{ $dataMember->links() }}
        Jumlah data User : {{ $dataMember->total() }} <br>
        Data per Halaman : {{ $dataMember->perPage() }} </br>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
  </div>



@endsection