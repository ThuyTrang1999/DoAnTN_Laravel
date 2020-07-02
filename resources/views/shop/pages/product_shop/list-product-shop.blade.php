@extends('shop.layouts.master')

@section('title_shop')
Trang chủ shop
@endsection

@section('shop_main_content')
<div class="shop_list_product">
    <div class="li-section-title mt-10">
        <h2>
            <span>Danh sách sản phẩm</span>
        </h2>
    </div>
    <div class="row">
        @foreach($listProduces as $lproduct)
        <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
            <!-- single-product-wrap start -->
            <div class="single-product-wrap">
                <div class="product-image">
                    <a href="{{route('client.detail')}}">
                        <!-- {{ asset('assets/client/images/product/large-size/1.jpg')}} -->
                        <img src="{{ asset($lproduct->url)}}" alt="Li's Product Image">
                    </a>
                    <span class="sticker">New</span>
                </div>
                <div class="product_desc">
                    <div class="product_desc_info">
                        <div class="product-review">
                            <h5 class="manufacturer">
                                <a href="{{route('client.detail')}}">Graphic Corner</a>
                            </h5>
                            <div class="rating-box">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <h4><a class="product_name" href="{{route('client.detail')}}">{{$lproduct->name}}</a></h4>
                        <div class="price-box">
                            <span class="new-price">{{$lproduct->price}}</span>
                        </div>
                    </div>
                    <div class="add-actions action__overplay">
                        <ul class="add-actions-link">
                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                        class="fa fa-heart"></i></a>
                            </li>
                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                    data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a>
                            </li>

                            <li class="add-cart active "><a href="#"><i class="fa fa-cart-arrow-down fa-7x"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- single-product-wrap end -->

        </div>
        @endforeach
    </div>
</div>
@endsection