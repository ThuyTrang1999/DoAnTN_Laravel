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
                                    <th class="li-product-remove">remove</th>
                                    <th class="li-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-trash text-danger"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img
                                                src="{{asset('assets/client/images/product/small-size/5.jpg')}}" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="#">Accusantium dolorem1</a></td>
                                    <td class="li-product-price"><span class="amount">$46.80</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                </tr>
                                <tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-trash text-danger"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img
                                                src="{{asset('assets/client/images/product/small-size/6.jpg')}}" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="#">Mug Today is a good day</a></td>
                                    <td class="li-product-price"><span class="amount">$71.80</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">

                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>$130.00</span></li>
                                    <li>Total <span>$130.00</span></li>
                                </ul>
                                <a href="#">Proceed to checkout</a>
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