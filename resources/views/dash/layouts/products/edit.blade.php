@extends('dash.layouts.app')
@section('title', 'Edit Product')
@section('content')
    {{-- @include('includes.display-error-messages') --}}
    <div class="col-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    <div class="col-12">
        <form action="{{route('dash.update',['id'=>$product->id])}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row my-3">
                <div class="col-6">
                    <input type="text" class="form-control" value="{{$product->name_en}}" name="name_en" id=""
                        placeholder="Name In English">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" value="{{$product->name_ar}}" name="name_ar" id=""
                        placeholder="Name In Arabic">
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-4">
                    <input type="number" class="form-control" value="{{$product->code }}" name="code" id=""
                        placeholder="Product Code">
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" value="{{$product->price}}" name="price" id=""
                        placeholder="Price">
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" value="{{$product->quantity}}" name="quantity" id=""
                        placeholder="Quantity">
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option @selected($product->status === "1")  value="1">Active</option>
                        <option @selected($product->status === "0")  value="0">Not Active</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="id_subcategorie">Sub Category</label>
                    <select name="id_subcategorie" id="id_subcategorie" class="form-control">
                          @foreach ($subcategories as $subcategorie)

                        <option
                        @selected($product->id_subcategorie ==="$subcategorie->id") value="{{$subcategorie->id}}">{{$subcategorie->name_en }}
                        </option>
                        @endforeach

                    </select>


                    
                </div>

            </div>
            <div class="form-row my-3">
                <div class="col-6">
                    <textarea name="desc_en"  value=""  id="" cols="30" class="form-control" rows="10"
                        placeholder="Details In English">{{$product->desc_en}}</textarea>
                </div>
                <div class="col-6">
                    <textarea name="desc_ar" value="" id="" cols="30" class="form-control" rows="10" placeholder="Details In Arabic">{{$product->desc_ar}}</textarea>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-12">
                    <label for="image"> Choose Product Image </label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="col-4">

               <img src="{{ asset('assets/images/products/' . $product->image ) }}" alt="{{$product->name_en}}">


            </div>

            </div>
            <div class="form-row">
                <div class="col-3 my-3">
                    <button class="btn btn-outline-primary rounded btn-sm"> update </button>
                </div>
            </div>
        </form>
    </div>
@endsection
