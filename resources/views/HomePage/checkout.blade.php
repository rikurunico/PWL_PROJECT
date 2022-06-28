@extends('HomePage.layout')
@section('content')

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="checkout__form">
                <h4>Detail Tagihan Pembayaran</h4>
                <form action="{{ route('PostCheckout') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> Nama Pembeli<span>*</span></p>
                                        <input type="text" name="nama" placeholder="Nama Pembeli" value="{{auth()->user()->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" name="alamat" placeholder="Alamat" value="{{auth()->user()->alamat}}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telepon<span>*</span></p>
                                        <input type="text" name="telepon" placeholder="Telepon" value="{{auth()->user()->notelp}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" placeholder="Email" value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text" name="notes" placeholder="Order Notes">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                
                                <h4>Pesanan Anda</h4>
                                <div class="checkout__order__products">Barang x Qty<span>Harga Satuan</span></div>
                                <ul>
                                    @foreach ($produk as $produk)
                                        <li>{{$produk->product}} x  {{$cart[$produk->id]['quantity']}} <span>{{$produk->harga}}</span></li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__total">Total <span name="total">{{$total}}</span></div>
                                <div class="checkout__input__checkbox">
                                    
                                </div>
                                <p style="color: black;">Setiap pemesanan barang yang dibeli hanya hanya melayani pembayaran non-tunai</p>
                                
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



@endsection