@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">code</div>

                <div class="card-body">

                    <form method="get" action="{{ route('reset.newpassowrd') }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">code</label>
                            <div class="col-md-6">
                              <input type="code" name="code" id="code" placeholder="{{old('code')}}">
                              <button type="supmit" class="btn btn-outline-primary">supmit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
