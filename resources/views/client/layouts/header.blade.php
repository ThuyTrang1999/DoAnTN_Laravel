  <!-- Begin Body Wrapper -->
  <div class="body-wrapper">
      <!-- Begin Header Area -->
      <header>
          <!-- Begin Header Top Area -->
          <div class="header-top">
              <div class="container">
                  <div class="row">
                      <!-- Begin Header Top Left Area -->
                      <div class="col-lg-3 col-md-4">
                          <div class="header-top-left">
                              <ul class="phone-wrap">
                                  <li>
                                      <a href="{{route('client.seller')}}">
                                          <i class="fa fa-shopping-bag" aria-hidden="true"></i>

                                          <span>Kênh người bán</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- Header Top Left Area End Here -->
                      <!-- Begin Header Top Right Area -->
                      <div class="col-lg-9 col-md-8">
                          <div class="header-top-right">
                              <ul class="ht-menu">
                                  <!-- Begin Currency Area -->
                                  <li>
                                      <a href="#" id="frm_register">
                                          <i class="fa fa-user-plus pr-1"></i>
                                          <span class="currency-selector-wrapper" data-toggle="modal"
                                              data-target="#registerModal">Đăng ký</span>
                                          <!-- Modal Register -->
                                          @include('client.layouts.register')
                                          <!-- End  modal Register-->
                                      </a>
                                  </li>
                                  <!-- Currency Area End Here -->
                                  <!-- Begin Language Area -->
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-user-circle pr-1"></i>
                                          <span class="language-selector-wrapper" data-toggle="modal"
                                              data-target="#loginModal">Đăng nhập</span>
                                          <!-- Modal Login -->

                                          @include('client.layouts.login')
                                          <!-- End  modal Login-->
                                      </a>
                                  </li>
                                  <!-- Language Area End Here -->
                                  <li style="display: none;">
                                      <div class="ht-setting-trigger is-active"><span>Đăng nhập thành công</span></div>
                                      <div class="setting ht-setting" style="display: block;">
                                          <ul class="ht-setting-list">
                                              <li><a href="login-register.html">My Account</a></li>
                                              <li><a href="login-register.html">Đăng xuất</a></li>
                                          </ul>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- Header Top Right Area End Here -->
                  </div>
              </div>
          </div>
          <!-- Header Top Area End Here -->
          <!-- Begin Header Middle Area -->
          <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
              <div class="container">
                  <div class="row">
                      <!-- Begin Header Logo Area -->
                      <div class="col-lg-3">
                          <div class="logo pb-sm-30 pb-xs-30">
                              <a href="{{ route('client.index')}}">
                                  <img src="{{asset('assets/client/images/menu/logo/3.png')}}" alt="">
                              </a>
                          </div>
                      </div>
                      <!-- Header Logo Area End Here -->
                      <!-- Begin Header Middle Right Area -->
                      <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                          <!-- Begin Header Middle Searchbox Area -->
                          <form action="#" class="hm-searchbox">
                              <input type="text" placeholder="Nhập khóa tìm kiếm của bạn ...">
                              <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Header Middle Searchbox Area End Here -->
                          <!-- Begin Header Middle Right Area -->
                          <div class="header-middle-right">
                              <ul class="hm-menu">
                                  <!-- Begin Header Mini Cart Area -->
                                  <li class="hm-minicart">
                                      <div class="hm-minicart-trigger">
                                          <span class="item-icon"></span>
                                          <span class="item-text">80.00
                                              <span class="cart-item-count">0</span>
                                          </span>
                                      </div>
                                      <span></span>
                                      <div class="minicart">
                                          <ul class="minicart-product-list">
                                              <li>
                                                  <a href="single-product.html" class="minicart-product-image">
                                                      <img src="{{asset('assets/client/images/product/small-size/5.jpg')}}"
                                                          alt="cart products">
                                                  </a>
                                                  <div class="minicart-product-details">
                                                      <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                      <span>£40 x 1</span>
                                                  </div>
                                                  <button class="close" title="Remove">
                                                      <i class="fa fa-close"></i>
                                                  </button>
                                              </li>
                                              <li>
                                                  <a href="single-product.html" class="minicart-product-image">
                                                      <img src="{{asset('assets/client/images/product/small-size/6.jpg')}}"
                                                          alt="cart products">
                                                  </a>
                                                  <div class="minicart-product-details">
                                                      <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                      <span>£40 x 1</span>
                                                  </div>
                                                  <button class="close" title="Remove">
                                                      <i class="fa fa-close"></i>
                                                  </button>
                                              </li>
                                          </ul>
                                          <p class="minicart-total">Tổng tiền: <span>80.00</span></p>
                                          <div class="minicart-button">
                                              <a href="{{route('client.cart')}}"
                                                  class="li-button li-button-fullwidth li-button-dark">
                                                  <span>View Full Cart</span>
                                              </a>

                                          </div>
                                      </div>
                                  </li>
                                  <!-- Header Mini Cart Area End Here -->
                              </ul>
                          </div>
                          <!-- Header Middle Right Area End Here -->
                      </div>
                      <!-- Header Middle Right Area End Here -->
                  </div>
              </div>
          </div>
          <!-- Header Middle Area End Here -->
          <!-- Begin Header Bottom Area -->

          <!-- Header Bottom Area End Here -->
          <!-- Begin Mobile Menu Area -->
          <div class="mobile-menu-area d-lg-none d-xl-none col-12">
              <div class="container">
                  <div class="row">
                      <div class="mobile-menu">
                      </div>
                  </div>
              </div>
          </div>
          <!-- Mobile Menu Area End Here -->
      </header>