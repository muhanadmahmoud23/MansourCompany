<!DOCTYPE html>
<html>

<head>
    <title>Terminal</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="m-3">
                <h2 push-left>Terminal</h2>
                <a href="{{ route('terminal.create') }}" id="btn-btn-create" class="btn btn-primary pull-left "
                    title="Add New Company"><i class="fa fa-plus"></i> Add New Terminal</a>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-striped " id="datatables-example">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>

            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatables-example').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('terminal.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    ]
                });
            });
        </script>
    </div>
</body>

</html>
