@extends('HomePage.layout')
@section('content')

    @foreach ($produk as $produk)
        Produk id :<h3>{{$produk->id}}</h3>
        Produk Name :<h3>{{$produk->product}}</h3>
        Produk Kategor :<h3>{{$produk->kategori}}</h3>
        Produk Merek :<h3>{{$produk->merk}}</h3>
        Produk Setok :<h3>{{$produk->stok}}</h3>
        Produk Harga :<h3>{{$produk->harga}}</h3>
        <br>
    @endforeach
    Harga Total :<h3>{{$total}}</h3>
@endsection