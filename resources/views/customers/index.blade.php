@extends('adminlte::page')


@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet"  type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                            <tr>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Phone number</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Purchases</th>
                                <th>Sum</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('api.customers.index') }}",
                "columns": [
                    { "data": "first_name" },
                    { "data": "middle_name" },
                    { "data": "last_name" },
                    { "data": "phone_number" },
                    { "data": "email" },
                    { data: 'photo', name: 'photo',
                        render: function( data, type, full, meta ) {
                            return "<img src=\"http://127.0.0.1:8000/storage/customers/" + data + "\" height=\"50\"width=\"50\"/>";
                        }
                    },
                    { "data": "purchases" },
                    { "data": "sum" },
                    { "data": "action" },


                ]
            });
        });
    </script>
@endsection
