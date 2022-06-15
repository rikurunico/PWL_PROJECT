@extends('HomePage.layout')
@section('content')

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="checkout__form">
                <h4>Detail Tagihan Pembayaran</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> Nama Pembeli<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Cantumkan alamat lengkap Anda" class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telepon<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                    placeholder="Tinggalkan pesan atas pesananan Anda.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pesanan Anda</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                
                                @foreach ($produk as $produk)
                                <ul> 
                                    <li> {{$produk->product}}<span>{{$produk->harga}}</span></li>
                                </ul>
                                @endforeach
                                
                                <div class="checkout__order__total">Total <span>{{$total}}</span></div>
                                <div class="checkout__input__checkbox">
                                    
                                </div>
                                <p>Setiap pemesanan barang yang dibeli hanya hanya melayani pembayaran non-tunai</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="card px-1 py-4">
                                        <div class="card-body">
                                            
                                            <h6 class="information mt-1">Submit Payment</h6>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name">Jenis Bank</label> <input class="form-control" type="text" placeholder=""> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                             <input class="form-control" type="text" placeholder="No. REK"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                                                <small class="agree-text">Confirmasi pembayaran Anda untuk pembayara ini</small> 
                                                <a href="#" class="terms">Terms & Conditions</a> </div> 
                                                <button class="btn btn-primary btn-block confirm-button">Confirm</button>
                                        </div>
                                    </div>
                                


                                
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