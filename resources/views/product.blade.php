<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
<meta name="description" content="">
<meta name="robots" content="noindex, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->

<head>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<!-- all css here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/chosen.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/meanmenu.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
	.product-wish{
		position: absolute;
		top:10%;
		left:0;
		z-index:99;
		right:30px;
		text-align:right;
		padding-top: 0;
	}
	.product-wish .fa{
		color:#cbcbcb;
		font-size:32px;
	}
	.product-wish .fa:hover{
		color:#ff7007;
	}
	.fill-heart{
		color:#ff7007 !important;
	}
</style>
</head>
<body>

<div class="container mt-3">
  <h2>create</h2>
  <form method="post" action="{{route("store")}}" enctype="multipart/form-data";>
    @csrf
    @if (session()->has('success')    )
    {{ session()->get('success') }}
    @endif
    <div class="mb-3 mt-3">
      <label for="name">name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      @error('name')
      <p>{{__('messages.requiredName') }}</p>
      @enderror
     </div>
    <div class="mb-3">
      <label for="pwd">price:</label>
      <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
     @error('price')
     <p>{{__('messages.requiredPrice')}}</p>
     @enderror
    </div>


    <div class="mb-3">
        <label for="image"> Choose Product Image </label>
        <input type="file" name="image" class="form-control" id="image">
      </div>


    <button type="submit" class="btn btn-primary">create</button>
  </form>
</div>


<div class="container mt-3">
    <h2>delet</h2>
    <form method="get" action="{{route("delete")}}">
      @csrf
      <div class="mb-3 mt-3">
        <label for="name">id:</label>
        <input type="number" class="form-control" id="id" placeholder="Enter id" name="id">
      </div>



      <button type="submit" class="btn btn-primary">delet</button>
    </form>
  </div>




  <div class="container mt-3">
    <h2>update</h2>
    <form method="PUT" action="{{route("update")}}">
      @csrf

      <div class="mb-3 mt-3">
        <label for="name">id:</label>
        <input type="number" class="form-control" id="id" placeholder="Enter id" name="id">
      </div>
      @error('id')
      <p>{{__('messages.requiredid')}}</p>
      @enderror

      <div class="mb-3 mt-3">
        <label for="name">name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      @error('name')
      <p>{{__('messages.requiredName') }}</p>
      @enderror
      <div class="mb-3">
        <label for="pwd">price:</label>
        <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
      @error('price')
      <p>{{__('messages.requiredPrice')}}</p>
      @enderror

      <button type="submit" class="btn btn-primary">update</button>
    </form>
  </div>

 @if (session()->has('success')    )
    {{ session()->get('success') }}
    @endif
  <div class="container mt-3">
    <table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>details</th>
        <th>image</th>
    </tr>
    @foreach ($products as $product)
    <tr>
          <td>{{ $product->id}}</td>
          <td>{{ $product->name}}</td>
          <td>{{ $product->price}}</td>
          <td>{{ $product->details_en}}</td>





          <td><img src="{{ asset('images/' . $product->photo ) }}" alt="{{$product->name}}">
          </td>

          <td><a href="{{route("edit",$product->id)}}" type="submit" class="btn btn-primary">edit</a></td>

          <td><a href="{{route("deletee",$product->id)}}" type="submit" class="btn btn-primary">delete</a></td>

          <td>
            <form action="{{route('store')}}"  method="post">
                @csrf
                <input style="display: none;" name="user_id" type="text" value="{{Auth::user()->id}}" />
                <input style="display: none;" name="product_id" type="text" value="{{$product->id}}" />
                <button>submit</button>
              </form>
          </td>


        </tr>
                @endforeach

  </table>
</body>
<form method="get" action="{{route("indexAR")}}">
    @csrf
<button type="submit" class="btn btn-primary">ar</button>
</form>

<form method="get" action="{{route("indexEN")}}">
    @csrf
<button type="submit" class="btn btn-primary">en</button>
</form>









<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</html>
