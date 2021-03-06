@extends('client.layouts.master')

@section('title')
    Trang chủ
@endsection


@section('content')
<!-- Begin Slider With Banner Area -->
@include('client.layouts.slider')
<!-- Slider With Banner Area End Here -->
<!-- Begin Product Area -->
<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu text-center">
                        <li><a class="active " data-toggle="tab" href="#"><span>Ưu đãi hấp dẫn</span></a></li>

                        </li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel ">
                        @foreach($Hot_KM as $pKM)
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $pKM->id])}}">

                                        <img src="upload/product/{{$pKM->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Tên shop</a>
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
                                        <h4><a class="product_name" href="{{route('client.detail', ['id' => $pKM->id])}}">{{$pKM->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$pKM->discout_price}}/{{$pKM->unit}}</span>
                                            <span class="old-price">{{$pKM->price}}/{{$pKM->unit}}</span>
                                            <!-- <span class="discount-percentage">-7%</span> -->
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
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
            </div>

        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Most purchased products Area -->
<div class="purchased product-area  pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu text-center">
                        <li><a class="active " data-toggle="tab" href="#"><span class="text-center">Sản phẩm mua nhiều nhất</span></a></li>

                        </li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($Hot_KM as $pMost)
                        <div class="col-lg-12 ">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap wow fadeInLeft single_overplay" data-wow-duration="2s">
                                <div class="product-image">
                                    <a href="{{route('client.detail')}}">
                                        <img src="../upload/product/{{$pMost->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Tên shop</a>
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
                                        <h4><a class="product_name"
                                                href="{{route('client.detail')}}">{{$pMost->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$pMost->price}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap wow fadeInLeft end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="wow single-banner bounceInLeft " data-wow-duration="2s">
                    <a href="#">
                        <img src="{{asset('assets/client/images/banner/1_3.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="wow single-banner bounceInUp" data-wow-duration="2s">
                    <a href="#">
                        <img src="{{asset('assets/client/images/banner/1_4.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="wow single-banner bounceInRight " data-wow-duration="2s">
                    <a href="#">
                        <img src="{{asset('assets/client/images/banner/1_5.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Featured Product With Banner Area -->
<div class="featured-pro-with-banner mt-sm-5 pb-sm-10 mt-xs-5 pb-xs-10 mb-30">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Featured Banner Area -->
            <div class="col-lg-3 text-center">
                <div class="single-banner featured-banner wow bounceInLeft" data-wow-duration="4s">
                    <a href="#">
                        <img src="{{asset('assets/client/images/banner/featured-banner.jpg')}}"
                            alt="Li's Featured Banner">
                    </a>
                </div>
            </div>
            <!-- Li's Featured Banner Area End Here -->
            <!-- Begin Featured Product Area -->
            <div class="col-lg-9">
                <div class="featured-product pt-sm-30 pt-xs-30">
                    <div class="li-section-title">
                        <h2>
                            <span>Sản phẩm nổi bậc</span>
                        </h2>
                    </div>
                    <div class="row wow bounceInUp" data-wow-duration="4s">
                        <div class="featured-product-active owl-carousel owl-theme">
                            @foreach($prouctTop as $pTop)
                            <div class="item featured-product-item">
                                <div class="featured-pro-wrapper  mb-sm-25">
                                    <div class="product-img">
                                        <a href="{{route('client.detail')}}">
                                            <img alt="" src="../upload/product/{{$pTop->url}}">
                                        </a>
                                    </div>
                                    <div class="featured-pro-content">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">{{$pTop->name}}</a>
                                            </h5>
                                        </div>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h4><a class="featured-product-name"
                                                href="{{route('client.detail')}}">Tên shop</a></h4>
                                        <div class="featured-price-box">
                                            <span class="new-price ">{{$pTop->discout_price}}</span>
                                            <!-- <span class="old-price">{{$pTop->price}}</span> -->
                                            <!-- <span class="discount-percentage">-7%</span> -->
                                        </div>
                                        <div class="featured-product-action action__overplay">
                                            <ul class="add-actions-link">
                                                <li class="add-cart heart"><a class="links-details "
                                                        href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                </li>
                                                <li class="add-cart "><a href="#" title="quick view"
                                                        class="quick-view-btn" data-toggle="modal"
                                                        data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a>
                                                </li>

                                                <li class="add-cart active "><a href="#"><i
                                                            class="fa fa-cart-arrow-down fa-7x"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Featured Product Area End Here -->
        </div>
    </div>
</div>
<!-- Featured Product With Banner Area End Here -->

<!-- Begin Li's TV & Audio Product Area -->
<section class="product-area li-laptop-product li-tv-audio-product pb-45 wow">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">`
                <div class="li-section-title">
                    <h2>
                        <span>Tìm kiếm nhiều nhất</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($prouctTop as $pTop)
                        <div class="col-lg-12 ">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap wow fadeInLeft single_overplay" data-wow-duration="2s">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $pTop->id])}}">
                                        <img src="../upload/product/{{ $pTop->url }}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Tên shop</a>
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
                                        <h4><a class="product_name"
                                                href="{{route('client.detail', ['id' => $pTop->id])}}">{{$pTop->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$pTop->price}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap wow fadeInLeft end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's TV & Audio Product Area End Here -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home wow flipInX" data-wow-duration="3s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Li's Static Home Image Area -->
                <div class="li-static-home-image"></div>
                <!-- Li's Static Home Image Area End Here -->
                <!-- Begin Li's Static Home Content Area -->
                <div class="li-static-home-content">
                    <p>Sale Offer<span>-20% Off</span>This Week</p>
                    <h2>Featured Product</h2>
                    <h2>Meito Accessories 2018</h2>
                    <p class="schedule">
                        Starting at
                        <span> $1209.00</span>
                    </p>
                    <div class="default-btn">
                        <a href="{{route('client.detail')}}" class="links">Shopping Now</a>
                    </div>
                </div>
                <!-- Li's Static Home Content Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Li's Static Home Area End Here -->
<!-- Begin Li's Phone Product Area -->


<section class="product-area li-laptop-product mt-30  pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Điện thoại</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Iphone</a></li>
                        <li><a href="shop-left-sidebar.html">Samsung</a></li>
                        <li><a href="shop-left-sidebar.html">Oppo</a></li>
                        <li><a href="shop-left-sidebar.html">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($phoneProduct as $phonePro)
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $phonePro->id])}}">

                                        <img src="upload/product/{{$phonePro->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Tên shop</a>
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
                                        <h4><a class="product_name" href="{{route('client.detail', ['id' => $phonePro->id])}}">{{$phonePro->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$phonePro->price}}/{{$phonePro->unit}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a
                                                    href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
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
            </div>
            <!-- Li's Section Area End Here -->

        </div>
    </div>
</section>
<!--  -->
<section class="product-area li-laptop-product  pb-45">
    <div class="container">
        <div class="row">

            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Laptop</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Dell</a></li>
                        <li><a href="shop-left-sidebar.html">Macbook</a></li>
                        <li><a href="shop-left-sidebar.html">Lenovo</a></li>
                        <li><a href="shop-left-sidebar.html">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($laptopProduct as $laptopPro)
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $laptopPro->id])}}">

                                        <img src="upload/product/{{$laptopPro->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Tên shop</a>
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
                                        <h4><a class="product_name"
                                                href="{{route('client.detail', ['id' => $laptopPro->id])}}">{{$laptopPro->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$laptopPro->price}}/{{$laptopPro->unit}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
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
            </div>
            <!-- Li's Section Area End Here -->

        </div>
    </div>
</section>
<!--  -->
<section class="product-area li-laptop-product  pb-45">
    <div class="container">
        <div class="row">

            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Đồng hồ</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Đồng hồ thông minh</a></li>
                        <li><a href="shop-left-sidebar.html">Đồng hồ thời trang</a></li>
                        <li><a href="shop-left-sidebar.html">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($oClockProduct as $oclockPro)
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $oclockPro->id])}}">

                                        <img src="upload/product/{{$oclockPro->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Ten shop</a>
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
                                        <h4><a class="product_name"
                                                href="{{route('client.detail', ['id' => $oclockPro->id])}}">{{$oclockPro->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$oclockPro->price}}/{{$oclockPro->unit}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
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
            </div>
            <!-- Li's Section Area End Here -->

        </div>
    </div>
</section>
<!--  -->
<section class="product-area li-laptop-product  pb-45">
    <div class="container">
        <div class="row">

            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Phụ kiện</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Chuột</a></li>
                        <li><a href="shop-left-sidebar.html">Usb</a></li>
                        <li><a href="shop-left-sidebar.html">Usb</a></li>
                        <li><a href="shop-left-sidebar.html">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($accesProduct as $accesPro)
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('client.detail', ['id' => $accesPro->id])}}">

                                        <img src="upload/product/{{$accesPro->url}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{route('client.detail')}}">Ten shop</a>
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
                                        <h4><a class="product_name"
                                                href="{{route('client.detail', ['id' => $accesPro->id])}}">{{$accesPro->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$accesPro->price}}/{{$accesPro->unit}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions action__overplay">
                                        <ul class="add-actions-link">
                                            <li class="add-cart heart"><a class="links-details " href="wishlist.html"><i
                                                        class="fa fa-heart"></i></a>
                                            </li>
                                            <li class="add-cart "><a href="#" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></li>

                                            <li class="add-cart active "><a href="#"><i
                                                        class="fa fa-cart-arrow-down fa-7x" aria-hidden="true"></i></a>
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
            </div>
            <!-- Li's Section Area End Here -->

        </div>
    </div>
</section>

@include('client.layouts.modal_show')
<!-- Quick View | Modal Area End Here -->
@endsection