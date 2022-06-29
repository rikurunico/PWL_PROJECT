@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data Penjualan</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('updateDataPenjualan', [$dataPenjualan->id]) }}" id="myForm" >
                @csrf
                <div class="form-group">
                <label for="nama">User</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old( 'nama', $dataPenjualan->nama) }}" disabled>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="product">Nama Barang</label>
                    <input type="text" name="product" class="form-control @error('product') is-invalid @enderror" value="{{ old( 'product', $dataPenjualan->product)}}" disabled >
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old( 'harga', $dataPenjualan->harga)}}" disabled >
                    @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah Item</label>
                    <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old( 'qty', $dataPenjualan->qty)}}" disabled > 
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Transaksi</label>
                    <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old( 'tanggal', $dataPenjualan->tanggal)}}" disabled >
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" value="{{ old( 'note', $dataPenjualan->note)}}" required >
                    @error('alamat')
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
