@extends('AdminView.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
            <th>Email</th>
            <th>Dibuat pada tanggal</th>
            <th>Role Akun</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($dataMember as $member)
          <tr>
            <td>{{ $member->id}}</td>
            <td>{{ $member->name}}</td>
            <td>{{ $member->email}}</td>
            <td>{{ $member->created_at}}</td>
            <td>{{ $member->level}}</td>
            <td>
              <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Edit
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" >
                <form action="#" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Nama" name="name" required="required" value="{{$member->name}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" required="required" value="{{$member->email}}">
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Role</label>
                    <div class="col-md-6">
                        <select name="city" id="city" class="form-control">
                          <option value="admin">admin</option>
                          <option value="user">user</option>
                        </select>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
            </td>
          </tr>
          @endforeach
          </tfoot>
        </table>
        
        <br>
        {{ $dataMember->links() }}
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