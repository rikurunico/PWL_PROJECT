@extends('HomePage.layout')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Gallery</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="col-md-4 mb-2">
    <form action="{{ route('SearchProduct') }}"  method="GET">
        <div class="input-group">
            <input type="search" name="cari" class="form-control rounded" placeholder="Cari Barang Disini" aria-label="Search" aria-describedby="search-addon" value=" {{old('cari')}}"/>
            <button type="submit" class="btn btn-outline-primary">search</button>
        </div>
    </form>
</div>

<div class="col-lg-12 col-md-13">
<div class="row">
    @foreach ($barang as $g)
    <div class="col-lg-4 col-md-6 col-sm-6 mix dapur mandi instan">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="{{'storage/'.$g->gambar}}"></div>
            <div class="featured__item__text">
            <div class="product__discount__item__text">
                  <span>{{$g ->kategori}}</span>
                  <h6><a href="#">{{$g ->product}}</a></h6>
                  <span>{{$g ->merk}}</span>
                  <h5>{{$g ->harga}}</h5>
            </div>
            <p class="btn-holder"><a href=" {{ route('AddCart', $g->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div> 
    </div>   
    @endforeach 
</div>
<button class="btn btn-primary"  onclick="history.back()"><i class="bi bi-arrow-return-left"></i> Kembali</button>
</div>

@endsection