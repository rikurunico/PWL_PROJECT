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
                  <div class="hero__item set-bg"  data-setbg="{{asset('img/hero/banner2.png')}}">
                    <div class="hero__text">
                      <span>TOKO SEMBAKO FAST</span>
                      <h2> Segala Macam Sembako <br />100% Halal</h2>
                      <h6>Free Pickup and Delivery Available</h6> <br>
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
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/minyak.png')}}" style="width: 100%; height: 100%">
                            <h5><a href="#">Minyak Goreng</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="">
                            <img src="{{asset('img/categories/sabun.png')}}" style="width: 100%; height: 100%">
                            <h5><a href="#">Sabun</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/gula.png')}}" style="width: 100%; height: 100%">
                            <h5><a href="#">Gula</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/tepung.png')}}" style="width: 100%; height: 100%">
                            <h5><a href="#">Tepung</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/telur.png')}}" style="width: 100%; height: 100%">
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
                        <h2>Product Unggulan</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".dapur">Bahan Dapur</li>
                            <li data-filter=".mandi">Perlengkapan Mandi</li>
                            <li data-filter=".instan">Makanan instan</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/minyak.png">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Minyak Goreng 2L</a></h6>
                            <h5>Rp. 28.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix instan ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/mie.png">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Mie Goreng</a></h6>
                            <h5>Rp. 2500</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix mandi">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/clear.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Shampoo</a></h6>
                            <h5>Rp. 25.000 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/tepung.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Tempung Terigu</a></h6>
                            <h5>Rp. 10.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix instan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/miekuah.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Mie Kuah</a></h6>
                            <h5>Rp. 3000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dapur ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/telur.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Telur 1 Kg</a></h6>
                            <h5>Rp. 24.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/peps.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Pasta Gigi</a></h6>
                            <h5>Rp. 13.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/sabun.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Sabun Batang</a></h6>
                            <h5>Rp. 3000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <section>
    <div class="card card-primary card-outline">
    <div class="card-body text-white bg-info">
    <h3 class="section-title-2 text-uppercase font-weight-300 text-center" ><b>Our</b> <span class="blue-text">Information</span></h3>
    <br></br>
            <div class="row">
                  <p class="justify-text">Barang yang sudah dibeli tidak dapat dikembalikan lagi karena barang yang dikirim sudah melewati proses pengecekan dan dipastikan dalam kondisi baik. Sehingga apabila ada keterlambatan, kerusakan maupun kehilangan barang pada saat pengiriman. 
                      Hal tersebut berada diluar tanggung jawab kami</p>
                
                </div>
            </div>
        </div>
    </section>

@endsection