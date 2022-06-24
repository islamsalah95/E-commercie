@extends('dash.layouts.app')
@section('title', 'Create Product')
@section('content')

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
        <form action="{{ route('dash.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row my-3">
                <div class="col-6">
                    <input type="text" class="form-control" name="name_en"
                        value="{{ old('name
                                                                                                                                ') }}"
                        id="" placeholder="Name In English">

                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="name_ar" value="{{ old('name') }}" id=""
                        placeholder="Name In Arabic">
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-4">
                    <input type="number" class="form-control" name="code" value="{{ old('code') }}" id=""
                        placeholder="code ">
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" name="price" value="{{ old('price') }}" id=""
                        placeholder="Price">
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}"
                        id="" placeholder="Quantity">
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Not Active</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="id_subcategorie">Sub Category</label>
                    <select name="id_subcategorie" id="id_subcategorie" class="form-control">
                        @foreach ($subcategories as $subcategorie)
                            <option value="{{ $subcategorie->id }}">{{$subcategorie->name_en}}</option>
                        @endforeach

                    </select>
                </div>

            </div>
            <div class="form-row my-3">
                <div class="col-6">
                    <textarea name="desc_en" id="" cols="30" class="form-control" rows="10"
                        placeholder="Details In English">{{ old('desc') }}</textarea>
                </div>
                <div class="col-6">
                    <textarea name="desc_ar" id="" cols="30" class="form-control" rows="10"
                        placeholder="Details In Arabic">{{ old('desc') }}</textarea>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-12">
                    <label for="image"> Choose Product Image </label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>
            <div class="form-row">
                <div class="col-3 my-3">
                    <button class="btn btn-outline-primary rounded btn-sm"> Create </button>
                </div>
            </div>
        </form>
    </div>
@endsection
