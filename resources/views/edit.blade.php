<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @csrf
    @foreach ($product as $product)
    @endforeach

    @if (session()->has('success')    )
    {{ session()->get('success') }}
    @endif

  <div class="container mt-3">
    <h2>update</h2>
    <form method="put" action="{{route("updatee")}}">
      @csrf

      <div class="mb-3 mt-3">
        <label for="name">id:</label>
        <input type="number" value="{{$product->id}}" class="form-control" id="id" placeholder="Enter id" name="id" disabled >
      </div>
{{-- {{ $id}} --}}
      <div class="mb-3 mt-3">
        <label for="name">name:</label>
        <input type="name" value="{{$product->name}}" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      @error('name')
      <p>{{__('messages.requiredName') }}</p>
      @enderror
      <div class="mb-3">
        <label for="pwd">price:</label>
        <input type="price" value="{{$product->price}}" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
      @error('price')
      <p>{{__('messages.requiredPrice')}}</p>
      @enderror

      <button type="submit" class="btn btn-primary">update</button>
    </form>
  </div>
</body>
</html>











