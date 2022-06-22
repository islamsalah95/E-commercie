@extends('dash.layouts.app')
@section('title', 'Home')
@section('content')

    <div class="container">
        <span id="successMessage"></span>
        <div class="row">
            <div class="col">
                @if (session('mailSent'))
                    <span id="message"></span>
                    <div class="alert alert-success">{{ session('mailSent') }}</div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col">

                <a id="btn" type="button" class="btn btn-outline-primary"
                    href="{{ route('sendMailNewProducts') }}">send</a>
            </div>
        </div>


    </div>

    <br>
    {{-- ///////////////////////////////// --}}
    <div class="container" style="margin-top: 94px">



        @if ($errors->any())
            <div class="row alert alert-danger">

                @foreach ($errors->all() as $error)
                    <ul>
                        <li>
                            {{ $error }}
                        </li>
                    </ul>
                @endforeach
            </div>

        @endif

        <h1 class="text-primary text-center">Send Offer</h1>

        <form id="ajaxform" action="" method="" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                        <span id="titleError" class="text-danger"></span>
                    </div>
                </div>
            </div>


            <div class="row  justify-content-around">
                <div class="col-8">
                    <div class="form-group">
                        <label class="text-align-center" for="message">Message:</label>


                        <input style="height: 110px;" type="text" class="form-control" name="message" id="message"
                            placeholder="message">

                        <span id="messageError" class="text-danger"></span>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col text-center">

                    <button id="btn2" class="btn btn-outline-primary rounded btn-sm"> send </button>


                </div>
            </div>


        </form>




    </div>


    <script>
        $(document).ready(function() {
            $("#btn").click(function(e) {
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "get",
                    url: "sendMailNewProducts",
                    success: function(response) {
                        return Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Your email sent success',
                            showConfirmButton: true,
                        });

                    }
                });



            });
        });
    </script>




    <script>
        $(document).ready(function() {
            $("#btn2").click(function(e) {
                e.preventDefault();



                $('#titleError').text(' ');
                $('#messageError').text(' ');

                $.ajax({
                    url: "sendMailNewOffer",
                    type: "get",
                    data: {
                        title: $("input[name=title]").val(),
                        message: $("input[name=message]").val(),
                        _token: $('meta[name="csrf-token"]').attr('content')

                    },
                    success: function(response) {
                        // $("#successMessage").html(
                        //     "<div class='alert alert-success'>done success</div>");
                        $('#titleError').val(" ");
                        $('#messageError').val(" ");
                        $("input[name=title]").val(" ");
                        $("input[name=message]").val(" ");
                        return Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Your email sent success',
                            showConfirmButton: true,
                        });

                    },
                    error: function(response) {
                        $('#titleError').text(response.responseJSON.errors.title);
                        $('#messageError').text(response.responseJSON.errors.message);
                        $("#successMessage").empty();
                        return Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong chick errors!',
                        });
                    }

                });

            });

        });
    </script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

@endsection
