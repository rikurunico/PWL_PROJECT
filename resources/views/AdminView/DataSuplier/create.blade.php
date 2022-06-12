@extends('AdminView.layout')
@section('content')

<div class="container mt-4">
                <h3>Form Tambah Data Supplier</h3>

            <div class="card-body" style="margin-bottom: 145px;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('PostCreateSupplier') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" required autofocus>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" required autofocus>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="Nomor Telepon" required autofocus>
                    @error('telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
                </div>
                

@endsection