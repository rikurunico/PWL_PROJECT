     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('HomePage') }} " class="nav-link {{ ($tittle === "Home Page") ? 'active' : ''}}" class="nav-link">Home</a>
      </li>
      <div class="dropdown">
        <button class="btn b dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
          Shop
        </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('shopingCart') }} " class="nav-link {{ ($tittle === "Checkout Page ") ? 'active' : ''}}" class="nav-link">Shoping Cart</a>
            <a class="dropdown-item" href="{{ route('CheckoutPage') }} " class="nav-link {{ ($tittle === " Shoping Card | Shop ") ? 'active' : ''}}" class="nav-link">Check Out</a>
          </div>
        </div>
      
      <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('ContactPage') }} " class="nav-link {{ ($tittle === "Contact Page") ? 'active' : ''}}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <!-- Notifications Dropdown Menu -->
      <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['harga'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{'storage/'. $details['gambar'] }}" />
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6 cart-detail-product">
                                    <p>{{ $details['product'] }}</p>
                                    <span class="price text-info"> ${{ $details['harga'] }}</span> <br>
                                    <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('Cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  
  </nav>