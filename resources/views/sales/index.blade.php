<!DOCTYPE html>
<html>

<head>
    <title>Sales</title>

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
                <h2 push-left>Sales</h2>
                <a href="{{ route('sales.create') }}" id="btn-btn-create" class="btn btn-primary pull-left "
                    title="Add New Company"><i class="fa fa-plus"></i> Add New Sale</a>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-striped " id="datatables-example">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>JOU_ID</th>
                            <th>SALESCALL_ID</th>
                            <th>REGION</th>
                            <th>BRANCH_CODE</th>
                            <th>COMPANY_SEQ</th>
                            <th>COMPANY_ID</th>
                            <th>COMPANY_NAME</th>
                            <th>CATEGORY_DESC</th>
                            <th>CATEGORY_ID</th>
                            <th>TER_ID</th>
                            <th>POS_ID</th>
                            <th>POS_CODE</th>
                            <th>POS_NAME</th>
                            <th>TEMP</th>
                            <th>SALESREP_ID</th>
                            <th>SALESREP_NAME</th>
                            <th>SALES_TER_ID</th>
                            <th>SALES_TER_NAME</th>
                            <th>ROTE_TYPE_ID</th>
                            <th>ROUTE_TYPE</th>
                            <th>VISIT_START_TIME</th>
                            <th>VISIT_END_TIME</th>
                            <th>CALL_STATUS_ID</th>
                            <th>FAMILY_ID</th>
                            <th>FAMILY_SEQ</th>
                            <th>PROD_FAMILY</th>
                            <th>PROD_SEQ</th>
                            <th>PRODUCT</th>
                            <th>PROD_ID</th>
                            <th>SALES_CAR</th>
                            <th>STOCK</th>
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
                    ajax: "{{ route('sales.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'JOU_ID',
                            name: 'JOU_ID'
                        },
                        {
                            data: 'SalesCall_id',
                            name: 'SalesCall_id'
                        },
                        {
                            data: 'REGION',
                            name: 'REGION'
                        },
                        {
                            data: 'BRANCH_CODE',
                            name: 'BRANCH_CODE'
                        },
                        {
                            data: 'COMPANY_SEQ',
                            name: 'COMPANY_SEQ'
                        },
                        {
                            data: 'COMPANY_ID',
                            name: 'COMPANY_ID'
                        },
                        {
                            data: 'COMPANY_NAME',
                            name: 'COMPANY_NAME'
                        },
                        {
                            data: 'CATEGORY_DESC',
                            name: 'CATEGORY_DESC'
                        },
                        {
                            data: 'CATEGORY_ID',
                            name: 'CATEGORY_ID'
                        },
                        {
                            data: 'TER_ID',
                            name: 'TER_ID'
                        },
                        {
                            data: 'POS_ID',
                            name: 'POS_ID'
                        },
                        {
                            data: 'POS_CODE',
                            name: 'POS_CODE'
                        },
                        {
                            data: 'POS_NAME',
                            name: 'POS_NAME'
                        },
                        {
                            data: 'TEMP',
                            name: 'TEMP'
                        },
                        {
                            data: 'SALESREP_ID',
                            name: 'SALESREP_ID'
                        },
                        {
                            data: 'SALESREP_NAME',
                            name: 'SALESREP_NAME'
                        },
                        {
                            data: 'SALES_TER_ID',
                            name: 'SALES_TER_ID'
                        },
                        {
                            data: 'SALES_TER_NAME',
                            name: 'SALES_TER_NAME'
                        },

                        {
                            data: 'ROUTE_TYPE_ID',
                            name: 'ROUTE_TYPE_ID'
                        },
                        {
                            data: 'ROUTE_TYPE',
                            name: 'ROUTE_TYPE'
                        },
                        {
                            data: 'DAY',
                            name: 'DAY'
                        },
                        {
                            data: 'VISIT_START_TIME',
                            name: 'VISIT_START_TIME'
                        },
                        {
                            data: 'CALL_STATUS_ID',
                            name: 'CALL_STATUS_ID'
                        },
                        {
                            data: 'FAMILY_ID',
                            name: 'FAMILY_ID'
                        },
                        {
                            data: 'FAMILY_SEQ',
                            name: 'FAMILY_SEQ'
                        },
                        {
                            data: 'PROD_FAMILY',
                            name: 'PROD_FAMILY'
                        },
                        {
                            data: 'PROD_SEQ',
                            name: 'PROD_SEQ'
                        },
                        {
                            data: 'PRODUCT',
                            name: 'PRODUCT'
                        },
                        {
                            data: 'PROD_ID',
                            name: 'PROD_ID'
                        },
                        {
                            data: 'SALES_CAR',
                            name: 'SALES_CAR'
                        },
                        {
                            data: 'STOCK',
                            name: 'STOCK'
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
