
    <!-- header start -->
    @include('website.nav')
  {{-- {{asset('website/assets/img/product/background.jpg')}} --}}
{{-- <div class="breadcrumb-area bg-image-3 ptb-150"  style="background-image:url({{url('website/assets/img/product/bgtown.jpg')}})"> --}}

    <!-- header end -->
		<!-- Slider Start -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




        {{-- <div class="container"> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">

          <img src="{{asset('website/assets/img/product/bg2.jpg')}}" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            {{-- <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p> --}}
          </div>
        </div>

        <div class="item">
          <img src="{{asset('website/assets/img/product/bg99.jpg')}}" alt="Chicago" style="width:100%;">
          <div class="carousel-caption">
            {{-- <h3>Chicago</h3>
            <p>Thank you, Chicago!</p> --}}
          </div>
        </div>

        <div class="item">
          <img src="{{asset('website/assets/img/product/bg1.jpg')}}" alt="New York" style="width:100%;">
          <div class="carousel-caption">
            {{-- <h3>New York</h3>
            <p>We love the Big Apple!</p> --}}
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>







          <!-- Slider End -->
    <!-- Product Area Start -->

    <!-- Product Area End -->
    {{-- <div class="product-price-wrapper">
                                                    <span>${{$product->price}} </span>
                                                    @if ($product->sale!=null) <span
                                                        class="product-price-old"
                                                        >-${{$product->price}}
                                                     </span> @endif



                                                </div> --}}
    <!-- Banner Start -->
    <div class="banner-area pt-100 pb-70">
        <div class="container">
            <div class="banner-wrap">
                <div class="row">


                    @foreach ($bestSaleProducts as $bestSaleProduct)
                     <div class="col-lg-6 col-md-6">
                        <div class="single-banner img-zoom mb-30">
                            <a href="{{route('showDetails', ['id' => $bestSaleProduct->id])}}">
                                <img src={{asset('website/assets/img/product/' . $bestSaleProduct->image )}} alt="" />
                            </a>
                            <div class="banner-content">

                               @if ($bestSaleProduct->sale!=null)
                                <h5>
                                    <h4>{{$bestSaleProduct->sale}}%Sale</h4>
                                </h5>
                                @endif

                                @if ($bestSaleProduct->price!=null)
                                <h5>Price
                                    ${{$bestSaleProduct->price}}</h5>
                                @endif

                            </div>
                        </div>
                    </div>
                     @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->
    <!-- New Products Start -->
    {{-- <div class="product-area gray-bg pt-90 pb-65">
        <div class="container">
            <div class="product-top-bar section-border mb-55">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">New Products</h3>
                </div>
            </div> --}}

            <div class="product-area gray-bg pt-90 pb-65">
                <div class="container">
                    <div class="product-top-bar section-border mb-55">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title">New Products</h3>
                        </div>
                    </div>

            <div class="grid-list-product-wrapper">
                <div class="product-grid product-view pb-20">
                    <div class="row">




                       @foreach ($products as $product)
                        <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{route('showDetails', ['id' => $product->id])}}">
                                        <img
                                            alt=""
                                            src={{asset('website/assets/img/product/' . $product->image )}}
                                        />
                                    </a>
                                    @if ($product->sale!=null)

                                    <span>-{{$product->sale}} </span>
                                    @endif
                                    <div class="product-action">
                                        <a
                                            class="action-wishlist"
                                            href="#"
                                            title="Wishlist"
                                        >
                                            <i
                                                class="ion-android-favorite-outline"
                                            ></i>
                                        </a>
                                        <a
                                            class="action-cart"
                                            href="#"
                                            title="Add To Cart"
                                        >
                                            <i
                                                class="ion-ios-shuffle-strong"
                                            ></i>
                                        </a>
                                        <a
                                            class="action-compare"
                                            href="#"
                                            data-target="#exampleModal"
                                            data-toggle="modal"
                                            title="Quick View"
                                        >
                                            <i
                                                class="ion-ios-search-strong"
                                            ></i>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="product-content text-left"
                                >
                                    <div
                                        class="product-hover-style"
                                    >
                                        <div class="product-title">
                                            <h4>
                                                <a href={{route('showDetails', ['id' => $product->id])}}>{{$product->name_en}}</a
                                                >
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4>
                                                <a href={{route('showDetails', ['id' => $product->id])}}>+ Add to
                                                    cart</a
                                                >
                                                <a href={{route('showDetails', ['id' => $product->id])}}>+ Add tocart</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div
                                        class="product-price-wrapper"
                                    >

                                        <span>${{$product->price}} -</span>
                                        <span
                                            class="product-price-old"
                                            >${{$product->price}}
                                        </span>
                                    </div>
                                </div>
                                <div class="product-list-details">
                                    <h4>
                                        <a
                                            href="{{route('showDetails', ['id' => $product->id])}}"
                                            >{{$product->name_en}}</a
                                        >
                                    </h4>
                                    <div
                                        class="product-price-wrapper"
                                    >
                                        <span>${{$product->price}}</span>
                                        <span
                                            class="product-price-old"
                                            >${{$product->price}}
                                        </span>
                                    </div>
                                    <p>
                                        {{$product->desc_en}}
                                    </p>
                                    <div
                                        class="shop-list-cart-wishlist"
                                    >
                                        <a href="#" title="Wishlist"
                                            ><i
                                                class="ion-android-favorite-outline"
                                            ></i
                                        ></a>
                                        <a
                                            href="#"
                                            title="Add To Cart"
                                            ><i
                                                class="ion-ios-shuffle-strong"
                                            ></i
                                        ></a>
                                        <a
                                            href="#"
                                            data-target="#exampleModal"
                                            data-toggle="modal"
                                            title="Quick View"
                                        >
                                            <i
                                                class="ion-ios-search-strong"
                                            ></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach











                    </div>
                </div>
                    </div>
                </div>



    <!-- New Products End -->
    <!-- Testimonial Area Collerction -->
<div
class="breadcrumb-area bg-image-3 ptb-150"  style="background-image:url({{url('website/assets/img/product/bg9.jpg')}})"
>
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>Winter Collerction</h3>
                <ul>
                    <li><a href="{{route('AllProducts')}}">sale up to 70%</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Testimonial Area End -->
    <!-- News Area Start -->
    {{-- <div class="blog-area bg-image-1 pt-90 pb-70">
        <div class="container">
            <div class="product-top-bar section-border mb-55">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">Latest News</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src={{url('website/assets/img/blog/blog-single-1.jpg')}} alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">14 Sep</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisici elit, sed do eius tempor
                                incididunt ut labore et dolore
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src={{url('website/assets/img/blog/blog-single-2.jpg')}} alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">20 Dec</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisici elit, sed do eius tempor
                                incididunt ut labore et dolore
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src={{url('website/assets/img/blog/blog-single-3.jpg')}} alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">18 Aug</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
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
    </div> --}}
    <!-- News Area End -->
    <!-- Newsletter Araea Start -->
    {{-- <div class="newsletter-area bg-image-2 pt-90 pb-100">
        <div class="container">
            <div class="product-top-bar section-border mb-45">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">Join to our Newsletter</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-10 col-md-auto">
                    <div class="footer-newsletter">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Your Email Address*" required />
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="" />
                                    </div>
                                    <div class="submit-button">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Newsletter Araea End -->
 @include('website.foter')
