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


    @foreach ($details as $detail)
        <div class="col-lg-6 col-md-6">
            <div class="single-banner img-zoom mb-30">
                <h1>{{ $detail->name }}</h1>
                <a href="{{ route('showDetails', ['id' => $detail->id]) }}">
                    visit
                </a>
                <div class="banner-content">
                    @if ($detail->sale != null)
                        <h5>
                            <h4>{{ $detail->sale }}%Sale</h4>
                        </h5>
                    @endif

                    @if ($detail->price != null)
                        <h5>Price
                            ${{ $detail->price }}</h5>
                    @endif

                </div>
            </div>
        </div>
    @endforeach

</body>


</html>
