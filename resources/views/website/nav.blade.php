<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
    <meta name="description" content="" />
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{ url('website/assets/img/favicon.png') }} />

    <!-- all css here -->
    <link rel="stylesheet" href={{ url('website/assets/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/animate.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/owl.carousel.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/slick.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/chosen.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/font-awesome.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/themify-icons.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/ionicons.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/jquery-ui.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/meanmenu.min.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/style.css') }} />
    <link rel="stylesheet" href={{ url('website/assets/css/responsive.css') }} />
    <script src={{ url('website/assets/js/vendor/modernizr-2.8.3.min.js') }}></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <!-- header start -->

    <header class="header-area gray-bg clearfix" style="background-color:rgb(29, 103, 105) ">
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo">
                            <a href={{ route('index') }}>
                                <img style="width: 183px;
                            height: 50px;" alt="" src={{ url('website/assets/img/logo/logo.png') }} />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="header-bottom-right">
                            <div class="main-menu">
                                <nav>
                                    <ul>

                                        <li>
                                            <a href={{ route('FashonKing') }}>home</a>

                                        </li>
                                        <li>
                                            <a href={{ route('about-us') }}>about</a>
                                        </li>
                                        <li class="mega-menu-position top-hover">
                                            <a href={{ route('AllProducts') }}>shop</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">
                                                            Male
                                                        </li>
                                                        <li>
                                                            <a href={{ route('MaleJeans') }}>Male Jeans</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('MaleTeShirt') }}>Male Te-Shirt</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('MaleShoes') }}>Male Shoes</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">
                                                            Women
                                                        </li>
                                                        <li>
                                                            <a href={{ route('WomenJeans') }}>Women Jeans</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('WomenTeShirt') }}>Women Te-Shirt</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('WomenShoes') }}>Women Shoes</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="mega-menu-title">
                                                            Kids
                                                        </li>
                                                        <li>
                                                            <a href={{ route('KidsJeans') }}>Kids Jeans</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('KidsTeShirt') }}>Kids Te-Shirt</a>
                                                        </li>
                                                        <li>
                                                            <a href={{ route('KidsShoes') }}>Kids Shoes</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="top-hover">
                                            <a href="">pages</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href={{ route('about-us') }}>about us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>shop Grid</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop-list') }}>shop list</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('product-details') }}>product details</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('cart.list') }}>cart page</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('checkout') }}>checkout</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('cart.list') }}>wishlist</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('my-account') }}>my account</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('login-register') }}>login / register</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('contact') }}>contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href={{ route('contact') }}>contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>





                                <div class="dropdown" style="position: relative;
                                bottom: -34px;
                                left: 17px;">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ trans('messages.langStatus') }}
                                            </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>



                            <div class="header-currency">
                                <span class="digit">user <i class="ti-angle-down"></i></span>
                                <div class="dollar-submenu">
                                    <ul>

                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                            <li class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>

                                            </li>

                                            </li>
                                        @endguest
                                        <li><a href="{{ route('adminstrationlogin') }}">login admin</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="">
                                    <div class="cart-icon">
                                        <i class="ti-shopping-cart"></i>
                                    </div>
                                </a>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href=""><img alt=""
                                                        src={{ url('website/assets/img/cart/cart-1.jpg') }} /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="">Phantom Remote
                                                    </a>
                                                </h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href=""><i class="ion ion-close"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href=""><img alt=""
                                                        src={{ url('website/assets/img/cart/cart-2.jpg') }} /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="">Phantom Remote</a>
                                                </h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href=""><i class="ion ion-close"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>
                                            Shipping : <span>$20.00</span>
                                        </h4>
                                        <h4>
                                            Total :
                                            <span class="shop-total">$260.00</span>
                                        </h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a href={{ route('cart.list') }}>view cart</a>
                                        <a href={{ route('checkout') }}>checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li>
                                    <a href="#">HOME</a>
                                    <ul>
                                        <li>
                                            <a href={{ route('FashonKing') }}>home version 1</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">pages</a>
                                    <ul>
                                        <li>
                                            <a href={{ route('about-us') }}>about us
                                            </a>
                                        </li>
                                        <li>
                                            <a href={{ route('shop') }}>shop Grid</a>
                                        </li>
                                        <li>
                                            <a href={{ route('shop-list') }}>shop list</a>
                                        </li>
                                        <li>
                                            <a href={{ route('product-details') }}>product details</a>
                                        </li>
                                        <li>
                                            <a href={{ route('cart.list') }}>cart page</a>
                                        </li>
                                        <li>
                                            <a href={{ route('checkout') }}>checkout</a>
                                        </li>
                                        <li>
                                            <a href={{ route('cart.list') }}>wishlist</a>
                                        </li>
                                        <li>
                                            <a href={{ route('my-account') }}>my account</a>
                                        </li>
                                        <li>
                                            <a href={{ route('login-register') }}>login / register</a>
                                        </li>
                                        <li>
                                            <a href={{ route('contact') }}>contact</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href={{ route('shop') }}> Shop </a>
                                    <ul>
                                        <li>
                                            <a href="#">Categories 01</a>
                                            <ul>
                                                <li>
                                                    <a href={{ route('shop') }}>Aconite</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Ageratum</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Allium</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Anemone</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Angelica</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Angelonia</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Categories 02</a>
                                            <ul>
                                                <li>
                                                    <a href={{ route('shop') }}>Balsam</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Baneberry</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Bee Balm</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Begonia</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Bellflower</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Bergenia</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Categories 03</a>
                                            <ul>
                                                <li>
                                                    <a href={{ route('shop') }}>Caladium</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Calendula</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Carnation</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Catmint</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Celosia</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Chives</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Categories 04</a>
                                            <ul>
                                                <li>
                                                    <a href={{ route('shop') }}>Daffodil</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Dahlia</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Daisy</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Diascia</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Dusty Miller</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('shop') }}>Dame’s Rocket</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">BLOG</a>
                                    <ul>
                                        <li>
                                            <a href={{ route('blog-masonry') }}>Blog Masonry</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog Standard</a>
                                            <ul>
                                                <li>
                                                    <a href={{ route('blog-left-sidebar') }}>left sidebar</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-right-sidebar') }}>right sidebar</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-no-sidebar') }}>no sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Post Types</a>
                                            <ul>

                                                <li>
                                                    <a href={{ route('blog-details-audio') }}>audio post</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-details-video') }}>video post</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-details-gallery') }}>gallery post</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-details-link') }}>link post</a>
                                                </li>
                                                <li>
                                                    <a href={{ route('blog-details-quote') }}>quote post</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href={{ route('contact') }}> Contact us </a>
                                </li>





                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
