@extends('layouts.appp')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <!--Grid column-->

            @foreach ($offer as $offe)
            @endforeach

            <div class="col-md-4 mb-4">

                <div class="card">
                    <div class="card-body text-center">

                        <h5 class="mt-0 mb-1 mb-2">{{ $offe->name }}
                        </h5>
                        <p class="grey-text mb-2">{{ $offe->desc }}</p>
                        <p class="grey-text mb-2" id="price">{{ $offe->price }}</p>


                        <img src="https://www.91-img.com/pictures/133432-v4-xiaomi-mi-a3-mobile-phone-large-1.jpg?tr=q-60"
                            class="my-3" alt="Angular logo">

                        <br>

                        <a class="checkout" href="{{ route('offers.checkout', $offe->price) }}"> شراء المنتج
                        </a>
                    </div>

                </div>

            </div>
            <div class="col-md-4 mb-4">
                <h3>اختر وسيله الدفع المناسبه</h3>

                <div id="showPayForm"></div>

                @if (isset($success))
                    <div class="alert alert-success text-center">
                        تم الدفع بنجاح
                    </div>
                @endif


                @if (isset($fail))
                    <div class="alert alert-danger text-center">
                        فشلت عملية الدفع
                    </div>
                @endif

            </div>

            <!--Grid column-->

            <div class="col-md-6">


            </div>

        </div>
    </div>
@endsection
{{-- <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId="></script>
<form action="{{route('offers.show',$offe->id)}}" class="paymentWidgets" data-brands="VISA MASTER MADA"></form> --}}
@section('scripts')
    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId="></script>
    <form action="{{ route('offers.show', $offe->id) }}" class="paymentWidgets" data-brands="VISA MASTER MADA"></form>
    {{-- <script>
    $(document).on('click', '.checkout', function (e) {
          e.preventDefault();
         $.ajax({
            type: 'get',
            url: "{{route('offers.checkout')}}",
            data: {
                price: $('#price').text(),
                offer_id: '{{$offe ->id}}',
            },
            success: function (data) {
                if (data.status == true) {
                    $('#showPayForm').empty().html(data.content);
                } else {
                 }
            }, error: function (reject) {
            }
        });
    });
</script> --}}
@stop
