@extends('client.layouts.master')

@section('title')
Trang chi tiet
@endsection


@section('content')

<!-- chi tiet -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        @if(isset($singleProduct))
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->

                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg')}}"
                                data-gall="myGallery">
                                <img src="../upload/product/{{ $singleProduct->url }}" alt="product image"
                                    style="{{$singleProduct->style}}">
                            </a>
                        </div>
                        <!-- <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/2.jpg')}}"
                                data-gall="myGallery">
                                <img src="{{asset('assets/client/images/product/large-size/2.jpg')}}"
                                    alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/3.jpg')}}"
                                data-gall="myGallery">
                                <img src="{{asset('assets/client/images/product/large-size/3.jpg')}}"
                                    alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/4.jpg')}}"
                                data-gall="myGallery">
                                <img src="{{asset('assets/client/images/product/large-size/4.jpg')}}"
                                    alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/5.jpg')}}"
                                data-gall="myGallery">
                                <img src="{{asset('assets/client/images/product/large-size/5.jpg')}}"
                                    alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/6.jpg')}}"
                                data-gall="myGallery">
                                <img src="{{asset('assets/client/images/product/large-size/6.jpg')}}"
                                    alt="product image">
                            </a>
                        </div> -->
                    </div>
                    <!-- <div class="product-details-thumbs slider-thumbs-1 mt-60">
                        <div class="sm-image"><img src="../upload/product/{{$singleProduct->url}}"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="{{asset('assets/client/images/product/small-size/2.jpg')}}"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="{{asset('assets/client/images/product/small-size/3.jpg')}}"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="{{asset('assets/client/images/product/small-size/4.jpg')}}"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="{{asset('assets/client/images/product/small-size/5.jpg')}}"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="{{asset('assets/client/images/product/small-size/6.jpg')}}"
                                alt="product image thumb">
                        </div>
                    </div> -->
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">

                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2>{{$singleProduct->name}}</h2>
                        <!-- <span class="product-details-ref">Ten shop</span> -->
                        <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li class="no-star"><i class="fa fa-star"></i></li>
                                <li class="no-star"><i class="fa fa-star"></i></li>
                                <li class="review-item"><a href="#">Đọc đánh giá</a></li>
                                <li class="review-item"><a href="#">Viết đánh giá</a></li>
                            </ul>
                        </div>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">{{$singleProduct->price}} VNĐ
                                /{{$singleProduct->unit}}</span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span>{{$singleProduct->desc}}</span>
                            </p>
                        </div>

                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity">
                                <div class="quantity">
                                    <label>Số lượng</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <button class="add-to-cart" type="submit">MUA NGAY</button>
                            </form>
                        </div>
                        <div class="product-additional-info pt-25">
                            <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào danh sách
                                yêu thích</a>
                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a>
                                    </li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Security policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Delivery policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Return policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endif
    </div>
</div>
<!-- content-wraper end -->
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                        <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li>
                        <li><a data-toggle="tab" href="#reviews"><span>Đánh giá</span></a></li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="description" class="tab-pane active show" role="tabpanel">
                <div class="product-description">
                    <span>{{$singleProduct->short_desc}}</span>
                </div>
            </div>
            <div id="product-details" class="tab-pane" role="tabpanel">
                <div class="product-details-manufacturer">
                    
                    <span>{{$singleProduct->desc}}</span>
                </div>
            </div>
            <div id="reviews" class="tab-pane" role="tabpanel">
                <div class="product-reviews">
                    <div class="product-details-comment-block">
                        <div class="comment-review">
                            <span>Số sao </span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        
                        <div class="review-btn">
                            <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết đánh giá</a>
                        </div>
                        <!-- Begin Quick View | Modal Area -->
                        <div class="modal fade modal-wrapper" id="mymodal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3 class="review-page-title">Write Your Review</h3>
                                        <div class="modal-inner-area row">
                                            <div class="col-lg-6">
                                                <div class="li-review-product">
                                                    <img src="{{asset('assets/client/images/product/large-size/3.jpg')}}"
                                                        alt="Li's Product">
                                                    <div class="li-review-product-desc">
                                                        <p class="li-product-name">Today is a good day Framed poster</p>
                                                        <p>
                                                            <span>Beach Camera Exclusive Bundle - Includes Two Samsung
                                                                Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire
                                                                Room With Exquisite Sound via Ring Radiator Technology.
                                                                Stream And Control R3 Speakers Wirelessly With Your
                                                                Smartphone. Sophisticated, Modern Design </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="li-review-content">
                                                    <!-- Begin Feedback Area -->
                                                    <div class="feedback-area">
                                                        <div class="feedback">
                                                            <h3 class="feedback-title">Our Feedback</h3>
                                                            <form action="#">
                                                                <p class="your-opinion">
                                                                    <label>Your Rating</label>
                                                                    <span>
                                                                        <select class="star-rating">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </span>
                                                                </p>
                                                                <p class="feedback-form">
                                                                    <label for="feedback">Your Review</label>
                                                                    <textarea id="feedback" name="comment" cols="45"
                                                                        rows="8" aria-required="true"></textarea>
                                                                </p>
                                                                <div class="feedback-input">
                                                                    <p class="feedback-form-author">
                                                                        <label for="author">Name<span
                                                                                class="required">*</span>
                                                                        </label>
                                                                        <input id="author" name="author" value=""
                                                                            size="30" aria-required="true" type="text">
                                                                    </p>
                                                                    <p class="feedback-form-author feedback-form-email">
                                                                        <label for="email">Email<span
                                                                                class="required">*</span>
                                                                        </label>
                                                                        <input id="email" name="email" value=""
                                                                            size="30" aria-required="true" type="text">
                                                                        <span class="required"><sub>*</sub> Required
                                                                            fields</span>
                                                                    </p>
                                                                    <div class="feedback-btn pb-15">
                                                                        <a href="#" class="close" data-dismiss="modal"
                                                                            aria-label="Close">Close</a>
                                                                        <a href="#">Submit</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Feedback Area End Here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View | Modal Area End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Sản phẩm cùng loại</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active related owl-carousel">
                    @foreach ($related_product as $reProduct)
                    <div class="col-lg-12 ">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap wow fadeInLeft single_overplay" data-wow-duration="2s">
                                <div class="product-image">
                                    <a href="{{route('client.detail',['id'=>$reProduct->id])}}">
                                        <img src="../upload/product/{{$reProduct->url}}" alt="Li's Product Image"
                                            >
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
                                        <h4><a class="product_name" href="{{route('client.detail')}}">{{$reProduct->name}}</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="new-price">{{$reProduct->discout_price}}</span>
                                            <span class="old-price">{{$reProduct->price}}</span>
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
                            <!-- single-product-wrap wow fadeInLeft end -->
                        </div>
                  @endforeach
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->

@endsection


