@extends('HomePage.layout')
@section('content')

<meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
  <section class="hero">
            <div class="row">
                  <div class="hero__item set-bg" style="background-size: 150vh 400px;" data-setbg="{{asset('img/hero/banner2.png')}}">
                    <div class="hero__text">
                      <span>TOKO SEMBAKO FAST</span>
                      <h2> Segala Macam Sembako <br />100% Halal</h2>
                      <p>Free Pickup and Delivery Available</p>
                      <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                  </div>
            </div>
    </section>
    

<!-- Categories Section Begin -->
<section class="categories">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" style="height: 400px;"data-setbg="{{asset('img/categories/minyak.png')}}">
                            <h5><a href="#">Minyak Goreng</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"style="height: 400px;" data-setbg="{{asset('img/categories/sabun.png')}}">
                            <h5><a href="#">Sabun</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"style="height: 400px;" data-setbg="{{asset('img/categories/gula.png')}}">
                            <h5><a href="#">Gula</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"style="height: 400px;" data-setbg="{{asset('img/categories/tepung.png')}}">
                            <h5><a href="#">Tepung</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" style="height: 400px;"data-setbg="{{asset('img/categories/telur.png')}}">
                            <h5><a href="#">Telur</a></h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Categories Section End -->

     <!-- Featured Section Begin -->
     <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Unggulan</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".dapur">Bahan Dapur</li>
                            <li data-filter=".mandi">Perlengkapan Mandi</li>
                            <li data-filter=".instan">Makanan Instan</li>
                            <!-- <li data-filter=".fastfood">Fastfood</li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix dapur mandi instan">
                  @foreach ($barang as $b)
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{$b->gambar}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$b ->product}}</a></h6>
                            <h5>{{$b ->harga}}</h5>
                        </div>
                    </div> 
                  @endforeach
                </div>   
            </div>
        </div>
  </section>
  <!-- Featured Section End -->



@endsection