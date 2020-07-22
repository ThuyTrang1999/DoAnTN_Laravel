@extends('client.layouts.master')

@section('title')
Trang giỏ hàng
@endsection


@section('content')

<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Hình ảnh</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="li-product-quantity">Số lượng</th>
                                    <th class="li-product-subtotal">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has("Cart") != null)
                                    @foreach(Session::get("Cart")->sanpham as $item) 
                                        <tr id="change-item-cart">
                                            <td class="li-product-remove"><a href="#"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                            <td class="li-product-thumbnail"><a><img
                                                        src="../upload/product/{{$item['ttsanpham']->url}}"
                                                        alt="Li's Product Image"></a></td>
                                            <td class="li-product-name"><a >{{$item['ttsanpham']->name}}</a></td>
                                            <td class="li-product-price"><span class="amount">{{$item['ttsanpham']->price}} vnđ</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="{{$item['quanty']}}" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">{{number_format($item['price'])}}</span></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">

                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng số giỏ hàng</h2>
                                <ul>
                                    <li>Số lượng sản phẩm<span>10</span></li>
                                    <li>Tổng tiền <span>$130.00</span></li>
                                </ul>
                                <a href="#">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->

@endsection