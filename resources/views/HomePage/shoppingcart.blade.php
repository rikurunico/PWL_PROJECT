@extends('HomePage.layout')
@section('content')
 <!-- Shoping Cart Section Begin -->
 <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Products</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        @php $total += $details['harga'] * $details['quantity'] @endphp
                                        <tr data-id="{{ $id }}">
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-3 hidden-xs"><img src="{{'storage/'. $details['gambar'] }}" width="100" height="100" class="img-responsive"/></div>
                                                    <div class="col-sm-9">
                                                        <h4 class="nomargin">{{ $details['product'] }}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="harga">Rp.{{ $details['harga'] }}</td>
                                            <td data-th="Quantity">
                                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart"/>
                                            </td>
                                            <td data-th="Subtotal" class="text-center">Rp.{{ $details['harga'] * $details['quantity'] }}</td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <br>   </br> 
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-right"><h3><strong>Total {{ $total }} Rupiah</strong></h3></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">
                                        <a href="{{ url('/gallery') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                        <a href="{{ url('/checkout') }}" class="btn btn-success">Checkout <i class="fa fa-angle-right"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
                        <script type="text/javascript">

                            $(".update-cart").change(function (e) {
                                e.preventDefault();
                        
                                var ele = $(this);
                        
                                $.ajax({
                                    url: '{{ route('Updatecart') }}',
                                    method: "patch",
                                    data: {
                                        _token: '{{ csrf_token() }}', 
                                        id: ele.parents("tr").attr("data-id"), 
                                        quantity: ele.parents("tr").find(".quantity").val()
                                    },
                                    success: function (response) {
                                    window.location.reload();
                                    }
                                });
                            });
                        
                            $(".remove-from-cart").click(function (e) {
                                e.preventDefault();
                        
                                var ele = $(this);
                        
                                if(confirm("Are you sure want to remove?")) {
                                    console.log(ele.parents("tr").attr("data-id"));
                                    $.ajax({
                                        url: '{{ route('Removecart') }}',
                                        type: "DELETE",
                                        data: {
                                            _token: '{{ csrf_token() }}', 
                                            _method: 'DELETE',
                                            id: ele.parents("tr").attr("data-id")
                                        },
                                        success: function (response) {
                                            window.location.reload();
                                        }
                                    });
                                }
                            });
                        
                        </script>
@endsection