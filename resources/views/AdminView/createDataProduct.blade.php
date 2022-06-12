@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Tambah Data Product</h3>

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

                <form method="post" action="{{ route('PostCreateProduct') }}" enctype="multipart/form-data" id="myForm">
            @csrf
                <div class="form-group">
                    <div class="d-flex flex-column align-items-center" style="text-transform: none">
                        <img id="preview-image-before-upload" class="rounded-circle mt-5" width="150px">
                    </div>
                    <label for="gambar">Gambar Product</label>
                    <input type="file" id="image" class="form-control @error('gambar') is-invalid @enderror" name="gambar" accept="image/*">
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="product">Product</label>
                <input type="text" name="product" class="form-control @error('product') is-invalid @enderror" placeholder="Nama Product" required autofocus>
                @error('product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="supplier">Supplier</label>
                    <select name="supplier" class="form-control">
                        @foreach ($supplier as $supplier) 
                            <option value="{{ $supplier ->id }}">{{ $supplier->nama }}</option>    
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="custom-select mr-sm-2  @error('kategori') is-invalid @enderror" name="kategori">
                        <option value="Bahan Dapur">Bahan Dapur</option>
                        <option value="Perlengkapan Mandi">Perlengkapan Mandi</option>
                        <option value="Perlengkapan Mandi">Makanan Instan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" placeholder="Merk" required >
                    @error('merk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="stok">Stok</label>
                    <input type="stok" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="stok" required >
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="harga" required >
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        
    $(document).ready(function (e) {
    
    $('#image').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
</script>

@endsection
