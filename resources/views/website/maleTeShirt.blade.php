@include('website.nav')
<link rel="stylesheet" href="./css/bootstrap.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- header end -->
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150"
    style="background-image:url({{ url('website/assets/img/product/bgtown.jpg') }})">
    <div class="container">
        <div class="breadcrumb-content text-center">
            {{-- <h3>SHOP PAGE</h3> --}}
            {{-- <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">SHOP PAGE</li>
                    </ul> --}}
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Page Area Start -->
<div class="shop-page-area ptb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-12">

                {{-- <div class="col-6" style="margin-left: -15px; width: 968px;">
                    <i class="fa fa-search-minus" aria-hidden="true">Search
                        <div><input id="myInput" type="text" placeholder="Search.."></div>
                    </i>

                </div> --}}
                <div class="grid-list-product-wrapper">
                    <div class="product-grid product-view pb-20">
                        <div class="row">
                            @foreach ($products as $product)
                                <div id="selector"
                                    class="product-width col-4 @if ($product->sale != null) <span>-{{ $product->sale }} </span> @endif">

                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('showDetails', ['id' => $product->id]) }}">
                                                <img alt=""
                                                    src={{ asset('website/assets/img/product/' . $product->image) }} />
                                            </a>
                                            @if ($product->sale != null)
                                                <span>-{{ $product->sale }}</span>
                                            @endif
                                            <div class="product-action">
                                                <a class="action-cart" title="Add To Cart">
                                                    <form action="{{ route('cart.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <input id="InputName" type="hidden"
                                                            value="{{ $product->name }}" name="name">
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
                                                        <a
                                                            href={{ route('showDetails', ['id' => $product->id]) }}>{{ $product->name }}</a>
                                                    </h4>
                                                </div>
                                                <div class="cart-hover">
                                                    <h4>
                                                        <a href={{ route('showDetails', ['id' => $product->id]) }}>+
                                                            Add to
                                                            cart</a>
                                                        <a href={{ route('showDetails', ['id' => $product->id]) }}>+
                                                            Add tocart</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper">
                                                <span>${{ $product->price }} </span>
                                                @if ($product->sale != null)
                                                    <span class="product-price-old">-${{ $product->price }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a
                                                    href="{{ route('showDetails', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>${{ $product->price }}</span>
                                                @if ($product->sale != null)
                                                    <span class="product-price-old">${{ $product->price }}
                                                    </span>
                                                @endif

                                            </div>
                                            <p>
                                                {{ $product->desc }}
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
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-style">

                        {!! $products->links() !!}


                    </div>

                </div>
            </div>



        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#selector").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });


    $(document).ready(function() {
        $("p").click(function() {
            $(this).hide();
        });
    });
</script>

<script src="./js/popper.min.js"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/bootstrap.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('website.foter')
