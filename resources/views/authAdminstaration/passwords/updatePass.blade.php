@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">updatepass</div>

                <div class="card-body">

                        <form action="{{route('updatePass',['email'=>$email])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class='form-control'  name='password' >
                                 <button type='supmit' class='btn btn-outline-primary'>supmit</button>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </form>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection
