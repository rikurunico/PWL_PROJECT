@extends('HomePage.layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
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

    <div class="col-lg-12 col-md-13">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/minyak.png')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Minyak Goreng Bimoli</a></h5>
                                            <div class="product__item__price">Rp. 50.000<span>Rp. 40.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/sabun.png')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Perlengkapan Mandi</span>
                                            <h5><a href="#">Sabun Batang Lifebuoy</a></h5>
                                            <div class="product__item__price">Rp. 18.0000 <span>Rp. 14.400</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/gula.png')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Gulaku</a></h5>
                                            <div class="product__item__price">Rp. 16.000 <span>Rp. 12.800</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/tepung.png')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Tepung Segitiga Biru</a></h5>
                                            <div class="product__item__price">Rp. 15.000 <span>Rp. 12.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/telur.png')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Telur 1 Kg</a></h5>
                                            <div class="product__item__price">Rp. 30.000 <span>Rp. 24.000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      @foreach ($galeri as $g)
                      <div class="col-lg-4 col-md-6 col-sm-6 mix dapur mandi instan">
                          <div class="featured__item">
                              <div class="featured__item__pic set-bg" data-setbg="{{$g->gambar}}">
                                  <ul class="featured__item__pic__hover">
                                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                  </ul>
                              </div>
                              <div class="featured__item__text">
                              <div class="product__discount__item__text">
                                    <span>{{$g ->kategori}}</span>
                                    <h6><a href="#">{{$g ->product}}</a></h6>
                                    <h5>{{$g ->harga}}</h5>
                              </div>
                              </div>
                          </div> 
                      </div>   
                      @endforeach 
                  </div>
  @endsection
  