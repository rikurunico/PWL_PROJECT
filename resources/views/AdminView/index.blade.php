@extends('AdminView.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Utama</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Halaman Utama</li>
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
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Dibuat pada tanggal</th>
            <th>Role Akun</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($dataMember as $member)
          <tr>
            <td>{{ $member->id}}</td>
            <td>{{ $member->name}}</td>
            <td>{{ $member->created_at}}</td>
            <td>{{ $member->level}}</td>
          </tr>
          @endforeach
          </tfoot>
        </table>
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