@include('website.nav')

<!-- header end -->
<!-- Breadcrumb Area Start -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="container">
    <div class="breadcrumb-content text-center">
        <h3>SINGLE PRODUCT</h3>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="active">Single Product</li>
        </ul>
    </div>
</div>
</div>
<!-- Breadcrumb Area End -->


@foreach ($products as $product)


    <!-- Product Deatils Area Start -->
    <div class="product-details pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-img">
                        <img class="zoompro" src={{ asset('website/assets/img/product/' . $product->image) }}
                            data-zoom-image={{ url('website/assets/img/product-details/product-detalis-bl1.jpg') }}
                            alt="zoom" />
                        <div id="gallery" class="mt-20 product-dec-slider owl-carousel">
                            <a data-image src={{ asset('website/assets/img/product/' . $product->image) }}
                                data-zoom-image={{ url('website/assets/img/product-details/product-detalis-bl1.jpg') }}>
                                <img data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }} alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }} alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }} alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }} alt="" />
                            </a>
                        </div>
                        <span>sale-29%</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating-review">
                            <div class="pro-dec-rating">
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline"></i>
                            </div>
                            <div class="pro-dec-review">
                                <ul>
                                    <li>32 Reviews</li>
                                    <li>Add Your Reviews</li>
                                </ul>
                            </div>
                        </div>
                        <span>${{ $product->price }}</span>
                        <div class="in-stock">
                            <p>Available: <span>In stock</span></p>
                        </div>
                        <p>
                            {{ $product->desc }}
                        </p>
                        {{-- <div class="pro-dec-feature">
                                <ul>
                                    <li>
                                        <input type="checkbox" /> Protection
                                        Plan: <span> 2 year $4.99</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" /> Remote Holder:
                                        <span> $9.99</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" /> Koral Alexa
                                        Voice Remote Case:
                                        <span> Red $16.99</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" /> Amazon Basics
                                        HD Antenna: <span>25 Mile $14.99</span>
                                    </li>
                                </ul>
                            </div> --}}
                        <div class="quality-add-to-cart">
                            <div class="quality">
                                <label>Qty: {{ $product->quantity }}</label>
                            </div>

                            <div class="shop-list-cart-wishlist">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden"
                                        value="{{ asset('website/assets/img/product/' . $product->image) }}"
                                        name="image">
                                    <input type="hidden" value="{{ $product->quantity }}" name="quantity">
                                    <span>Add To Cart</span>
                                    <button class="ion-ios-shuffle-strong"></button>
                                </form>

                            </div>
                        </div>
                        {{-- <div class="pro-dec-categories">
                                <ul>
                                    <li class="categories-title">
                                        Categories:
                                    </li>
                                    <li><a href="#">Green,</a></li>
                                    <li><a href="#">Herbal, </a></li>
                                    <li><a href="#">Loose,</a></li>
                                    <li><a href="#">Mate,</a></li>
                                    <li><a href="#">Organic </a></li>
                                </ul>
                            </div> --}}
                        {{-- <div class="pro-dec-categories">
                                <ul>
                                    <li class="categories-title">Tags:</li>
                                    <li><a href="#"> Oolong, </a></li>
                                    <li><a href="#"> Pu'erh,</a></li>
                                    <li><a href="#"> Dark,</a></li>
                                    <li><a href="#"> Special </a></li>
                                </ul>
                            </div> --}}
                        <div class="pro-dec-social">
                            <ul>
                                <li>
                                    <a class="tweet" href="#"><i class="ion-social-twitter"></i>
                                        Tweet</a>
                                </li>
                                <li>
                                    <a class="share" href="#"><i class="ion-social-facebook"></i>
                                        Share</a>
                                </li>
                                <li>
                                    <a class="google" href="#"><i class="ion-social-googleplus-outline"></i>
                                        Google+</a>
                                </li>
                                <li>
                                    <a class="pinterest" href="#"><i class="ion-social-pinterest"></i>
                                        Pinterest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Deatils Area End -->
    <div class="description-review-area pb-70">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav text-center">
                    <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                    {{-- <a data-toggle="tab" href="#des-details2">Tags</a> --}}
                    <a data-toggle="tab" href="#des-details3">Review</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>
                                {{ $product->desc }}
                            </p>
                            {{-- <p>
                                    {{$product->desc}}
                                </p>
                                <ul>
                                    <li>{{$product->desc}} </li>
                                    <li>
                                        {{$product->desc}}
                                    </li>
                                    <li>
                                        {{$product->desc}}
                                    </li>
                                    <li>
                                        {{$product->desc}}
                                    </li>
                                </ul> --}}
                        </div>
                    </div>
                    {{-- <div id="des-details2" class="tab-pane">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>Tags:</span></li>
                                    <li><a href="#"> Green,</a></li>
                                    <li><a href="#"> Herbal,</a></li>
                                    <li><a href="#"> Loose,</a></li>
                                    <li><a href="#"> Mate,</a></li>
                                    <li><a href="#"> Organic ,</a></li>
                                    <li><a href="#"> special</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    <div id="des-details3" class="tab-pane">
                        <div class="rattings-wrapper">

                            @foreach ($comments as $comment)
                                <div class="sin-rattings">
                                    <div class="star-author-all">
                                        <div class="ratting-star f-left">
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <span>(5)</span>
                                        </div>
                                        <div class="ratting-author f-right">
                                            <h3>{{ $comment->name }}</h3>
                                            <span>{{ $comment->created_at }}</span>
                                            {{-- <span>{{$comment->ate}}</span> --}}
                                        </div>
                                    </div>
                                    <p>
                                        {{ $comment->message }}</p>
                                </div>
                            @endforeach


                        </div>
                        <div class="ratting-form-wrapper">
                            <h3>Add your Comments :</h3>
                            <div class="ratting-form">
                                {{-- <form method="post" action="{{route('comment', ['product_id' => $product->id])}}">
                                        @csrf --}}
                                <div class="star-box">
                                    <h2>Rating:</h2>
                                    <div class="ratting-star">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">






                                            {{-- {{ Auth::user()->name }}
                                                auth()->guard('admin')->user() --}}
                                            @if (Auth::guard('web')->check())
                                                <form method="post"
                                                    action="{{ route('comment', ['product_id' => $product->id, 'name' => Auth::user()->name]) }}">
                                                    @csrf
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="rating-form-style form-submit">
                                            <textarea name="message" placeholder="message" type="text" id="message"></textarea>
                                            @if (!Auth::guard('web')->check())
                                                <h4><span>to add review </span><a style="color:blue "
                                                        href="{{ route('login') }}">Login</a></h4>
                                            @else
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                <li>{{ $error }}</li>
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                @if (session()->has('success'))
                                                    <div class="alert alert-success">
                                                        <ul>
                                                            <li>add review success</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <button id="butto" class="btn btn-success">add</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- <script >
  document.getElementById("butto").onclick=function (){
if(!Auth::guard('web')->check())
{return "login first";}
else {
    return $next($request);

}

}
        </script> --}}
<!-- Footer style Start -->
@include('website.foter')
