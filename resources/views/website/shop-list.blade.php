@include('website.nav')

<!-- header end -->
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>SHOP LIST</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Shop List</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Page Area Start -->
<div class="shop-page-area ptb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <ul class="view-mode">
                            <li>
                                <a href="#product-grid" data-view="product-grid"><i class="fa fa-th"></i></a>
                            </li>
                            <li class="active">
                                <a href="#product-list" data-view="product-list"><i class="fa fa-list-ul"></i></a>
                            </li>
                        </ul>
                        <p>Showing 1 - 20 of 30 results</p>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <label>View:</label>
                            <select>
                                <option value="">20</option>
                                <option value="">23</option>
                                <option value="">30</option>
                            </select>
                        </div>
                        <div class="product-show shorting-style">
                            <label>Sort by:</label>
                            <select>
                                <option value="">Default</option>
                                <option value="">Name</option>
                                <option value="">price</option>
                            </select>
                        </div>
                    </div>
                </div>






                <div class="grid-list-product-wrapper">
                    <div class="product-list product-view pb-20">
                        <div class="row">
                            <div
                                class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-1.jpg') }} />
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
                                                    <a href="product-details.php">Nature Close
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Nature Close Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-2.jpg') }} />
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
                                                    <a href="product-details.php">Pink wave
                                                        Cup</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Pink wave Cup</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-3.jpg') }} />
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
                                                    <a href="product-details.php">Tea and Chai</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Tea and Chai</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-4.jpg') }} />
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
                                                    <a href="product-details.php">BeBe Bloom
                                                        tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">BeBe Bloom tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-5.jpg') }} />
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
                                                    <a href="product-details.php">Que herbal
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Que herbal Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-6.jpg') }} />
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
                                                    <a href="product-details.php">Every spice
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Every spice Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-7.jpg') }} />
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
                                                    <a href="product-details.php">Every spice
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Every spice Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-8.jpg') }} />
                                        </a>
                                        <div class="product-action">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <div class="product-hover-style">
                                            <div class="product-title">
                                                <h4>
                                                    <a href="product-details.php">Que herbal
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Que herbal Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-1.jpg') }} />
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
                                                    <a href="product-details.php">Society Ice
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Society Ice Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-2.jpg') }} />
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
                                                    <a href="product-details.php">Green Tea
                                                        Tulsi</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Green Tea Tulsi</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-3.jpg') }} />
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
                                                    <a href="product-details.php">Best Friends
                                                        Tea</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4>
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Best Friends Tea</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.php">
                                            <img alt=""
                                                src={{ url('website/assets/img/product/product-4.jpg') }} />
                                        </a>
                                        <div class="product-action">
                                            <a class="action-cart" title="Add To Cart">
                                                <form action="{{ route('cart.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}"
                                                        name="id">
                                                    <input type="hidden" value="{{ $product->name }}"
                                                        name="name">
                                                    <input type="hidden" value="{{ $product->price }}"
                                                        name="price">
                                                    <input type="hidden"
                                                        value="{{ asset('website/assets/img/product/' . $product->image) }}"
                                                        name="image">
                                                    <input type="hidden" value="{{ $product->quantity }}"
                                                        name="quantity">
                                                    <button class="ion-ios-shuffle-strong"></button>
                                                </form>
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
                                                    <a href="product-details.php">+ Add to
                                                        cart</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>$100.00 -</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h4>
                                            <a href="product-details.php">Instant Tea Premix</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>$100.00</span>
                                            <span class="product-price-old">$120.00
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipic it, sed
                                            do eiusmod tempor incididunt
                                            ut labore et dolore magna
                                            aliqua. Ut enim ad minim
                                            veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <div class="shop-list-cart-wishlist">
                                            <a href="#" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                            <a href="#" title="Add To Cart"><i
                                                    class="ion-ios-shuffle-strong"></i></a>
                                            <a href="#" data-target="#exampleModal" data-toggle="modal"
                                                title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <ul>
                                <li>
                                    <a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i>
                                        Prev</a>
                                </li>
                                <li>
                                    <a class="active" href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li>
                                    <a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="total-pages">
                            <p>Showing 1 - 20 of 30 results</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">
                            Shop By Categories
                        </h4>
                        <div class="shop-catigory">
                            <ul id="faq">
                                <li>
                                    <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Morning Tea
                                        <i class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Herbal</a></li>
                                        <li><a href="#">Loose </a></li>
                                        <li><a href="#">Mate</a></li>
                                        <li><a href="#">Organic</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-2">Tea Trends<i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-2" class="panel-collapse collapse">
                                        <li><a href="#">Pu'Erh</a></li>
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">White</a></li>
                                        <li>
                                            <a href="#">Yellow Tea</a>
                                        </li>
                                        <li>
                                            <a href="#">Puer Tea</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-3">Most Tea Map
                                        <i class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-3" class="panel-collapse collapse">
                                        <li>
                                            <a href="#">Green Tea</a>
                                        </li>
                                        <li>
                                            <a href="#">Oolong Tea</a>
                                        </li>
                                        <li>
                                            <a href="#">Black Tea</a>
                                        </li>
                                        <li>
                                            <a href="#">Pu'erh Tea </a>
                                        </li>
                                        <li>
                                            <a href="#">Dark Tea</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Herbal Tea</a></li>
                                <li><a href="#">Rooibos Tea</a></li>
                                <li><a href="#">Organic Tea</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-price-filter mt-40 shop-sidebar-border pt-35">
                        <h4 class="shop-sidebar-title">Price Filter</h4>
                        <div class="price_filter mt-25">
                            <span>Range: $100.00 - 1.300.00 </span>
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <input type="text" id="amount" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                        <h4 class="shop-sidebar-title">By Brand</h4>
                        <div class="sidebar-list-style mt-20">
                            <ul>
                                <li>
                                    <input type="checkbox" /><a href="#">Green
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Herbal
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Loose
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Mate
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Organic
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">White
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Yellow Tea
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Puer Tea
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                        <h4 class="shop-sidebar-title">By Color</h4>
                        <div class="sidebar-list-style mt-20">
                            <ul>
                                <li>
                                    <input type="checkbox" /><a href="#">Black
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Blue
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Green
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Grey
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Red</a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">White
                                    </a>
                                </li>
                                <li>
                                    <input type="checkbox" /><a href="#">Yellow
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                        <h4 class="shop-sidebar-title">
                            Compare Products
                        </h4>
                        <div class="compare-product">
                            <p>You have no item to compare.</p>
                            <div class="compare-product-btn">
                                <span>Clear all </span>
                                <a href="#">Compare <i class="fa fa-check"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-widget mt-40 shop-sidebar-border pt-35">
                        <h4 class="shop-sidebar-title">Popular Tags</h4>
                        <div class="shop-tags mt-25">
                            <ul>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">Oolong</a></li>
                                <li><a href="#">Black</a></li>
                                <li><a href="#">Pu'erh</a></li>
                                <li><a href="#">Dark </a></li>
                                <li><a href="#">Special</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Page Area Start -->
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
                                <li><a href="#">Privacy Policy</a></li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Customer Service</a>
                                </li>
                                <li><a href="#">Return Policy</a></li>
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
                                <li><a href="#">Support Center</a></li>
                                <li>
                                    <a href="#">Term & Conditions</a>
                                </li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
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
                                Your current address goes to here,120
                                haka, angladesh
                            </p>
                            <div class="footer-contact mt-20">
                                <ul>
                                    <li>(+008) 254 254 254 25487</li>
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
                                Pellentesque habitant morbi tristique
                                senectus et netus et malesuada fames ac
                                turpis egestas. Vestibulum tortor quam,
                                feugiat vitae, ultricies eget, tempor
                                sit amet.
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
