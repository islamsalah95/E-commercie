@include('website.nav')

<!-- header end -->
<!-- Breadcrumb Area Start -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                            <a data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                data-image src={{ asset('website/assets/img/product/' . $product->secondimage) }}>
                                <img data-image
                                    src={{ asset('website/assets/img/product/' . $product->secondimage) }}
                                    alt="" />
                            </a>
                        </div>
                        <span>{{ $product->sale }}</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating-review">
                            <div class="pro-dec-rating">
                                @for ($i = 1; $i <= $commentsAverages; $i++)
                                    <i class="ion-android-star-outline theme-star"></i>
                                @endfor

                                @for ($i = 1; $i <= 5 - $commentsAverages; $i++)
                                    <i class="ion-android-star-outline"></i>
                                @endfor


                            </div>
                            <div class="pro-dec-review">
                                <ul>
                                    <li>{{ $commentsCounter }} Reviews</li>


                                    <li>

                                        @if (!Auth::guard('web')->check())
                                            <h4><span>to add review </span><a style="color:blue "
                                                    href="{{ route('login') }}">Login</a></h4>
                                        @else


                                            <a href="#"data-bs-toggle="modal" data-bs-target="#myModal">Add Your
                                                Reviews</a>
                                        @endif



                                    </li>


                                </ul>
                            </div>
                        </div>
                        <span>${{ $product->price }}</span>

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
                        @if ($product->L > 0 || $product->XL > 0 || $product->XXL > 0)
                            <div class="in-stock">
                                <p>Available: <span>In stock</span></p>
                            </div>
                        @else
                            <div class="text-danger">
                                <p>Not Avilable: <span class="text-danger">Out stock</span></p>
                            </div>
                        @endif





                        <div class="quality-add-to-cart">
                            <div class="quality">
                                <label>
                                    @if ($product->L > 0)
                                        L
                                    @endif

                                </label>


                                <label>
                                    @if ($product->XL > 0)
                                        XL
                                    @endif

                                </label>


                                <label>
                                    @if ($product->XXL > 0)
                                        XXL
                                    @endif

                                </label>

                            </div>







                            <div class="shop-list-cart-wishlist">
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-3">
                                            @if ($product->L > 0||$product->XL > 0||$product->XXL > 0)

                                            <select name="cartSize">Size
                                                <option value="choese" selected>choese Size</option>

                                                @if ($product->L > 0)
                                                <option value="L" id="L">L</option>
                                            @endif

                                            @if ($product->XL > 0)
                                            <option value="XL" id="XL">XL</option>
                                            @endif

                                        @if ($product->XXL > 0)
                                        <option value="XXL" id="XXL">XXL</option>
                                        @endif
                                            </select>


                                        </div>


                                        <div class="col-3">
                                            <input type="hidden" placeholder="{{ $product->id }}" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            <input type="hidden"
                                                value="{{ asset('website/assets/img/product/' . $product->image) }}"
                                                name="image">
                                            <input type="hidden" value="{{ $product->quantity }}" name="quantity">

                                            <span>Add To Cart</span>
                                            <button class="ion-ios-shuffle-strong"></button>
                                        </div>
                                        @endif

                                </form>

                            </div>
                        </div>

                        @error('cartSize')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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

                                            <div class="pro-dec-rating">
                                                @for ($i = 1; $i <= $comment->rate; $i++)
                                                    <i class="ion-android-star-outline theme-star"></i>
                                                @endfor

                                            </div>



                                            <span>({{ $comment->rate }})</span>
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

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">



                                            @if (!Auth::guard('web')->check())
                                                <h4><span>to add review </span><a style="color:blue "
                                                        href="{{ route('login') }}">Login</a></h4>
                                            @else
                                                {{-- @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                <li>{{ $error }}</li>
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                @endif --}}
                                                @if (session()->has('success'))
                                                    <div class="alert alert-success">
                                                        <ul>
                                                            <li>add review success</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#myModal">
                                                    Open Review modal
                                                </button>
                                            @endif

                                            {{-- {{ Auth::user()->name }}
                                                auth()->guard('admin')->user() --}}
                                            {{-- @if (Auth::guard('web')->check())
                                                <form method="post"
                                                    action="{{ route('comment', ['product_id' => $product->id, 'name' => Auth::user()->name]) }}">
                                                    @csrf
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="rating-form-style form-submit">

                                            <textarea name="message" placeholder="message" type="text" id="message"></textarea>
                                            <span class="alert alert-danger" id="Error"></span>
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
                                </form> --}}




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @if (Auth::guard('web')->check())
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <form method="post"
                                    action="{{ route('comment', ['product_id' => $product->id, 'name' => Auth::user()->name]) }}">
                                    @csrf
                                    <!-- Modal body -->

                                    <div class="modal-body">
                                        <select name="rate" id="rate">

                                            <option value="choese" selected>choese</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div class="modal-body">
                                        <textarea name="message" placeholder="message" type="text" id="message"></textarea>
                                    </div>


                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"
                                            data-bs-dismiss="modal">add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

@endforeach

{{-- @include('website.foter') --}}


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
