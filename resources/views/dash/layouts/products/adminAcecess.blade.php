@extends('dash.layouts.app')
@section('title', 'All Admins')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
<form action="{{ route('addNationalId') }}" method="post" enctype="multipart/form-data">
@csrf
  <div class="container">
    {{-- <form action="{{ route('addNationalId') }}" method="post" enctype="multipart/form-data"> --}}
  <div class="row align-items-center">
    <div class="col-4 ">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId" placeholder="name">
    </div>

    <div class="col-4">
        <label for="nationalid" class="form-label">NationalId</label>
      <input type="number" class="form-control" name="nationalid" id="nationalid" aria-describedby="emailHelpId" placeholder="nationalid">
    </div>

      <div class="col-4" style="margin-top: 25px;">
     <button type="submit" class="btn btn-outline-dark">add NationalId</button>
    </div>
  </div>
{{-- </form> --}}
</div>

</form>





        <div class="col-12">
            <table id="datatable" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>National Id</th>
                        <th>Creation Date</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach (Arr::except($adminstrations,['adminstrations'=>'0']) as $adminstration )
                        <tr>
                            <td>{{ $adminstration->id }}</td>
                            <td>{{ $adminstration->name }}</td>
                            <td>{{ $adminstration->email }}</td>
                            <td>{{ $adminstration->nationalid  }}</td>
                            <td> {{ $adminstration->created_at }}</td>
                            <td>
                                <form action="{{ route('adminAcecess.delete', ['id' => $adminstration->id]) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button id="btnbtn" class="btn btn-outline-danger btn-sm rounded"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
<div class="row">
    <div class="col-3 align-self-center" style="">
        {!! $adminstrations->links() !!}
    </div>
</div>
    </div>


    @endsection

    @section('js')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script>
            $(function() {
                $("#datatable").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
