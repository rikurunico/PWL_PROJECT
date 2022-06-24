@extends('HomePage.layout')
@section('content')

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

    <div class="col-md-4 mb-2">
        <form action="{{ route('SearchProduct') }}"  method="GET">
            <div class="input-group">
                <input type="search" name="cari" class="form-control rounded" placeholder="Cari Barang Disini" aria-label="Search" aria-describedby="search-addon" value=" {{old('cari')}}"/>
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
        </form>
    </div>

    <div class="col-lg-12 col-md-13">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off 20%</h2>
                        </div>
                        

                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                        data-setbg="{{asset('img/categories/sania.png')}}">
                                            <div class="product__discount__percent">Habis</div>
                                            <!-- <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Minyak Goreng Sania</a></h5>
                                            <div class="product__item__price">Rp. 40.000 <span>Rp. 50.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/dettol.png')}}">
                                            <div class="product__discount__percent">Habis</div>
                                            <!-- <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Perlengkapan Mandi</span>
                                            <h5><a href="#">Sabun Cair Dettol</a></h5>
                                            <div class="product__item__price">Rp. 14.400  <span>Rp. 18.0000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/dettol2.png')}}">
                                            <div class="product__discount__percent">Habis</div>
                                            <!-- <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Perlengkapan Mandi</span>
                                            <h5><a href="#">Sabun Batang Dettol</a></h5>
                                            <div class="product__item__price">Rp. 7.000 <span>Rp. 10.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/kecap.png')}}">
                                            <div class="product__discount__percent">Habis</div>
                                            <!-- <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Bahan Dapur</span>
                                            <h5><a href="#">Kecap ABC</a></h5>
                                            <div class="product__item__price">Rp. 20.000 <span>Rp. 25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('img/categories/miekuah.png')}}">
                                            <div class="product__discount__percent">Habis</div>
                                            <!-- <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Makanan Instan</span>
                                            <h5><a href="#">Mie Kuah</a></h5>
                                            <div class="product__item__price">Rp. 3.000 <span>Rp. 5.000</span></div>
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
                                    <form action="{{ route('Sorting') }}" method="get">
                                        <span>Sort By</span>
                                        <select name="sorting" class="form-control">
                                            <option value="id">Id</option>
                                            <option value="product">Product</option>
                                            <option value="kategori">Kategori</option>
                                        </select>
                                        <button type="submit" class="site-btn">Sort</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$total}}</span> Products found</h6>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      @foreach ($galeri as $g)
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
                  
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div> 
                @endif
                <!-- @yield('content') -->
            </div>
        </div>
    </section>
  @endsection
  