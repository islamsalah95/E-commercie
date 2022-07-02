@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">access</div>

                <div class="card-body">

                    <form method="get" action="{{route('access.admin.register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nationalid" class="col-md-4 col-form-label text-md-end">{{ __('National Id ') }}</label>

                            <div class="col-md-6">
                           <input type="number" name="nationalid" id="nationalid" placeholder="nationalid">
                                @error('nationalid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
