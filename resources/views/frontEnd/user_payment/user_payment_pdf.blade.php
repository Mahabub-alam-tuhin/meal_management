<!DOCTYPE html>
<html>
<head>
    <style>
        /* Define custom styles for your PDF here */
        .card {
            border: 1px solid #333;
            margin: 20px;
            padding: 10px;
            font-family: Arial, sans-serif;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Payment List</h5>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>month</th>
                        <th>payment_date</th>
                        <th>amount</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach($userPayments as $Payments)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$Payments->month}}</td>
                            <td>{{$Payments->payment_date}}</td>
                            <td>{{$Payments->amount}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
