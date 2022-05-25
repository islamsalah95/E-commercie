@extends('dash.layouts.app')
@section('title', 'All Products')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="col-12">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    </div>
    <div class="col-12">
        <table id="datatable" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Creation Date</th>
                    <th>Update Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)

                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->code }}</td></td>
                        <td>{{$product->name_en}}</td>
                        <td>{{$product->price}} EGP</td>
                        <td >{{$product->quantity}}</td>
                        <td >{{$product->status}}</td>
                        <td> {{$product->created_at}}</td>
                        <td> {{$product->updated_at}}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-sm rounded" href="{{route('dash.edit',['id'=>$product->id])}}">Edit</a>
                            <form action="{{route('dash.delete',['id'=>$product->id])}}"
                                method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm rounded"> Delete </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
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
@endsection
