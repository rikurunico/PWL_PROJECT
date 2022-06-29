@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data Product</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="post" enctype="multipart/form-data" action="{{ route('UpdateProduct', [$product->id]) }}" id="myForm" >
                @csrf
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputProduct">Product</label>
                    <input type="text" name="product" class="form-control @error('product') is-invalid @enderror" value="{{ old( 'product', $product->product) }}" required autofocus>
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Supplier">Supplier Name</label>
                    <select name="supplier" class="form-control">
                        @foreach ($supplier as $spy)
                        <option value="{{ $spy ->id }}">{{$spy->nama}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="Supplier">ID Supplier</label>
                    <input type="text" name="supplier" class="form-control @error('supplier') is-invalid @enderror" value="{{ old( 'supplier', $product->supplier_id) }}" required autofocus>
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    </div>
            
                <div class="form-group col-md-5">
                    <label for="Merk">Merk</label>
                    <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old( 'merk', $product->merk) }}" required autofocus>
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="stok">Stok</label>
                    <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old( 'stok', $product->stok) }}" required autofocus>
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old( 'harga', $product->harga) }}" required autofocus>
                        @error('product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" class="form-control" name="kategori">
                        <option value = "Bahan Dapur">Bahan Dapur</option>
                        <option value = "Perlengkapan Mandi">Perlengkapan Mandi</option>
                        <option value = "Makanan Instan">Makanan Instan</option>
                    </select>
                    </div>
                    
                   
                </div>
                </div>

                <div class="form-group">
                    <div class="d-flex flex-column align-items-center" style="text-transform: none">
                        <img id="preview-image-before-upload" class="rounded-left mt-5" width="150px" src="/storage/{{ $product->gambar }} ">
                    </div>
                    <label for="gambar">Gambar</label>
                    <input type="file" id="image" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="/storage/{{ $product->gambar }}" accept="image/*">
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
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
