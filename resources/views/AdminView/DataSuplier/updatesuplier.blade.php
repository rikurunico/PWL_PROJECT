@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data Supplier</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('UpdateSupplier', [$suppliers->id]) }}" id="myForm" >
                @csrf
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old( 'nama', $suppliers->nama) }}" required autofocus>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old( 'alamat', $suppliers->alamat)}}" required >
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old( 'telp', $suppliers->telp)}}" required >
                    @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
