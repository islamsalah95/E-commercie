@include('website.nav')

<!-- header end -->
<!-- Slider Start -->
<div class="slider-area">
    <div class="slider-active owl-dot-style owl-carousel">
        <div class="single-slider ptb-265 bg-img"
            style="
                            background-image: url(assets/img/slider/slider-2.jpg);
                        ">
            <div class="container">
                <div class="slider-content slider-animated-1 text-center">
                    <h1 class="animated">Want to stay healthy</h1>
                    <h1 class="animated">drink matcha.</h1>
                    <div class="slider-btn mt-25">
                        <a class="animated" href="product-details.php">shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider ptb-265 bg-img"
            style="
                            background-image: url(assets/img/slider/slider-2.jpg);
                        ">
            <div class="container">
                <div class="slider-content slider-animated-1 text-center">
                    <h1 class="animated">Want to stay healthy</h1>
                    <h1 class="animated">drink matcha.</h1>
                    <div class="slider-btn mt-25">
                        <a class="animated" href="product-details.php">shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider End -->
<!-- Banner Start -->
<div class="banner-area pt-100 pb-70">
    <div class="container">
        <div class="banner-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div
                        class="single-banner img-zoom mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                        <a href="#">
                            <img src={{ url('website/assets/img/banner/banner-1.png') }} alt="" />
                        </a>
                        <div class="banner-content">
                            <h4>-50% Sale</h4>
                            <h5>Summer Vacation</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div
                        class="single-banner img-zoom mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                        <a href="#">
                            <img src={{ url('website/assets/img/banner/banner-2.png') }} alt="" />
                        </a>
                        <div class="banner-content">
                            <h4>-20% Sale</h4>
                            <h5>Winter Vacation</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Product Area Start -->
<div class="product-area bg-image-1 pt-90 pb-95">
    <div class="container">
        <div class="product-top-bar style-two section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">Latest Products</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit sed do eiusmod tempor
                    incididunt
                </p>
            </div>
        </div>
        <div class="featured-product-active hot-flower owl-carousel product-nav">
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.php">
                        <img alt="" src={{ url('website/assets/img/product/product-1.jpg') }} />
                    </a>
                    <span>-20%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                            title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.php">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4>
                                <a href="product-details.php">+ Add to cart</a>
                            </h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.php">
                        <img alt="" src={{ url('website/assets/img/product/product-2.jpg') }} />
                    </a>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                            title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.php">Pink wave Cup</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4>
                                <a href="product-details.php">+ Add to cart</a>
                            </h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.php">
                        <img alt="" src={{ url('website/assets/img/product/product-3.jpg') }} />
                    </a>
                    <span>-50%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                            title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.php">Tea and Chai</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4>
                                <a href="product-details.php">+ Add to cart</a>
                            </h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.php">
                        <img alt="" src={{ url('website/assets/img/product/product-4.jpg') }} />
                    </a>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                            title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.php">Pearly Everlasting</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4>
                                <a href="product-details.php">+ Add to cart</a>
                            </h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.php">
                        <img alt="" src={{ url('website/assets/img/product/product-5.jpg') }} />
                    </a>
                    @if ($product->sale != null)
                        <span>-{{ $product->sale }}</span>
                    @endif
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                            title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.php">Que herbal Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4>
                                <a href="product-details.php">+ Add to cart</a>
                            </h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
<!-- Testimonial Area Start -->
<div class="testimonials-area bg-img pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="testimonial-active owl-carousel">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src={{ url('website/assets/img/icon-img/testi.png') }} />
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eiusmod tempor
                            incididunt ut labore
                        </p>
                        <h4>Gregory Perkins</h4>
                        <h5>Customer</h5>
                    </div>
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src={{ url('website/assets/img/icon-img/testi.png') }} />
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eiusmod tempor
                            incididunt ut labore
                        </p>
                        <h4>Khabuli Teop</h4>
                        <h5>Marketing</h5>
                    </div>
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src={{ url('website/assets/img/icon-img/testi.png') }} />
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eiusmod tempor
                            incididunt ut labore
                        </p>
                        <h4>Lotan Jopon</h4>
                        <h5>Admin</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->
<!-- New Products Start -->
<div class="product-area gray-bg pt-90 pb-65">
    <div class="container">
        <div class="product-top-bar style-two section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">New Products</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit sed do eiusmod tempor
                    incididunt
                </p>
            </div>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active">
                <div class="featured-product-active owl-carousel product-nav">
                    <div class="product-wrapper-single">
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-1.jpg') }} />
                                </a>
                                @if ($product->sale != null)
                                    <span>-{{ $product->sale }}</span>
                                @endif
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">BeBe Bloom tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-2.jpg') }} />
                                </a>
                                <span>-50%</span>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Every spice Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-single">
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-3.jpg') }} />
                                </a>
                                <span>-60%</span>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Que herbal Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-4.jpg') }} />
                                </a>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Tea and Chai</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-single">
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-5.jpg') }} />
                                </a>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Society Ice Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-6.jpg') }} />
                                </a>
                                <span>-40%</span>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Green Tea Tulsi</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-single">
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-7.jpg') }} />
                                </a>
                                <span>-60%</span>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Best Friends Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-8.jpg') }} />
                                </a>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Instant Tea
                                                Premix</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-single">
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-3.jpg') }} />
                                </a>
                                @if ($product->sale != null)
                                    <span>-{{ $product->sale }}</span>
                                @endif
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Black Ossum Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-wrapper mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img alt="" src={{ url('website/assets/img/product/product-6.jpg') }} />
                                </a>
                                <span>-70%</span>
                                <div class="product-action">
                                    <a class="action-wishlist" href="#" title="Wishlist">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                    <a class="action-cart" href="#" title="Add To Cart">
                                        <i class="ion-ios-shuffle-strong"></i>
                                    </a>
                                    <a class="action-compare" href="#" data-target="#exampleModal"
                                        data-toggle="modal" title="Quick View">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-left">
                                <div class="product-hover-style">
                                    <div class="product-title">
                                        <h4>
                                            <a href="product-details.php">Le Bongai Tea</a>
                                        </h4>
                                    </div>
                                    <div class="cart-hover">
                                        <h4>
                                            <a href="product-details.php">+ Add to cart</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="product-price-wrapper">
                                    <span>$100.00 -</span>
                                    <span class="product-price-old">$120.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Products End -->

<!-- Newsletter Araea Start -->
<div class="newsletter-area bg-image-2 pt-90 pb-100">
    <div class="container">
        <div class="product-top-bar section-border mb-45">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">
                    Join to our Newsletter
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-10 col-md-auto">
                <div class="footer-newsletter">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form
                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email"
                                    placeholder="Your Email Address*" required />
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                        tabindex="-1" value="" />
                                </div>
                                <div class="submit-button">
                                    <input type="submit" value="Subscribe" name="subscribe"
                                        id="mc-embedded-subscribe" class="button" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Araea End -->
<!-- News Area Start -->
<div class="blog-area bg-image-1 pt-90 pb-70">
    <div class="container">
        <div class="product-top-bar section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">Latest News</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div
                    class="blog-single mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                    <div class="blog-thumb">
                        <a href="#"><img src={{ url('website/assets/img/blog/blog-single-1.jpg') }}
                                alt="" /></a>
                    </div>
                    <div class="blog-content pt-25">
                        <span class="blog-date">14 Sep</span>
                        <h3>
                            <a href="#">Lorem ipsum sit ame co.</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eius tempor
                            incididunt ut labore et dolore
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div
                    class="blog-single mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                    <div class="blog-thumb">
                        <a href="#"><img src={{ url('website/assets/img/blog/blog-single-2.jpg') }}
                                alt="" /></a>
                    </div>
                    <div class="blog-content pt-25">
                        <span class="blog-date">20 Dec</span>
                        <h3>
                            <a href="#">Lorem ipsum sit ame co.</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eius tempor
                            incididunt ut labore et dolore
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div
                    class="blog-single mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                    <div class="blog-thumb">
                        <a href="#"><img src={{ url('website/assets/img/blog/blog-single-3.jpg') }}
                                alt="" /></a>
                    </div>
                    <div class="blog-content pt-25">
                        <span class="blog-date">18 Aug</span>
                        <h3>
                            <a href="#">Lorem ipsum sit ame co.</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisici elit, sed do eius tempor
                            incididunt ut labore et dolore
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Area End -->
<!-- Start Brand Area -->
<div class="brand-logo-area ptb-100">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/1.jpg') }} />
            </div>
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/2.jpg') }} />
            </div>
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/3.jpg') }} />
            </div>
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/4.jpg') }} />
            </div>
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/5.jpg') }} />
            </div>
            <div class="single-brand-logo">
                <img alt="" src={{ url('website/assets/img/brand-logo/2.jpg') }} />
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->
<!-- Footer style Start -->
<footer class="footer-area pt-75 gray-bg-3">
    <div class="footer-top gray-bg-3 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-25">
                            <h4>My Account</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="my-account.php">My Account</a>
                                </li>
                                <li>
                                    <a href="about-us.php">Order History</a>
                                </li>
                                <li>
                                    <a href="wishlist.php">WishList</a>
                                </li>
                                <li><a href="#">Newsletter</a></li>
                                <li>
                                    <a href="about-us.php">Order History</a>
                                </li>
                                <li>
                                    <a href="#">International Orders</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-25">
                            <h4>Information</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="about-us.php">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Delivery Information</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Customer Service</a>
                                </li>
                                <li>
                                    <a href="#">Return Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-25">
                            <h4>Quick Links</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="#">Support Center</a>
                                </li>
                                <li>
                                    <a href="#">Term & Conditions</a>
                                </li>
                                <li><a href="#">Shipping</a></li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">FAQS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer-widget-red footer-black-color mb-40">
                        <div class="footer-title mb-25">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="footer-about">
                            <p>
                                Your current address goes to
                                here,120 haka, angladesh
                            </p>
                            <div class="footer-contact mt-20">
                                <ul>
                                    <li>
                                        (+008) 254 254 254 25487
                                    </li>
                                    <li>(+009) 358 587 657 6985</li>
                                </ul>
                            </div>
                            <div class="footer-contact mt-20">
                                <ul>
                                    <li>yourmail@example.com</li>
                                    <li>example@admin.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pb-25 pt-25 gray-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>
                            <a target="_blank" href="https://www.templateshub.net">Fashion King</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-img f-right">
                        <a href="#">
                            <img alt="" src={{ url('website/assets/img/icon-img/payment.png') }} />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer style End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src={{ url('website/assets/img/product-details/product-detalis-l1.jpg') }}
                                    alt="" />
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src={{ url('website/assets/img/product-details/product-detalis-l2.jpg') }}
                                    alt="" />
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src={{ url('website/assets/img/product-details/product-detalis-l3.jpg') }}
                                    alt="" />
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src={{ url('website/assets/img/product-details/product-detalis-l4.jpg') }}
                                    alt="" />
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img
                                        src={{ url('website/assets/img/product-details/product-detalis-s1.jpg') }}
                                        alt="" /></a>
                                <a data-toggle="tab" href="#pro-2"><img
                                        src={{ url('website/assets/img/product-details/product-detalis-s2.jpg') }}
                                        alt="" /></a>
                                <a data-toggle="tab" href="#pro-3"><img
                                        src={{ url('website/assets/img/product-details/product-detalis-s3.jpg') }}
                                        alt="" /></a>
                                <a data-toggle="tab" href="#pro-4"><img
                                        src={{ url('website/assets/img/product-details/product-detalis-s4.jpg') }}
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>Dutchman's Breeches</h3>
                            <div class="product-price-wrapper">
                                <span class="product-price-old">£162.00
                                </span>
                                <span>£120.00</span>
                            </div>
                            <p>
                                Pellentesque habitant morbi
                                tristique senectus et netus et
                                malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat
                                vitae, ultricies eget, tempor sit
                                amet.
                            </p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="quickview-color-wrap">
                                    <label>Color*</label>
                                    <div class="quickview-color">
                                        <ul>
                                            <li class="blue">b</li>
                                            <li class="red">r</li>
                                            <li class="pink">p</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                        value="02" />
                                </div>
                                <button>Add to cart</button>
                            </div>
                            <span><i class="fa fa-check"></i> In
                                stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
</div>

<!-- all js here -->
<script src={{ url('website/assets/js/vendor/jquery-1.12.0.min.js') }}></script>
<script src={{ url('website/assets/js/popper.js') }}></script>
<script src={{ url('website/assets/js/bootstrap.min.js') }}></script>
<script src={{ url('website/assets/js/imagesloaded.pkgd.min.js') }}></script>
<script src={{ url('website/assets/js/isotope.pkgd.min.js') }}></script>
<script src={{ url('website/assets/js/ajax-mail.js') }}></script>
<script src={{ url('website/assets/js/owl.carousel.min.js') }}></script>
<script src={{ url('website/assets/js/plugins.js') }}></script>
<script src={{ url('website/assets/js/main.js') }}></script>
</body>

</html>
