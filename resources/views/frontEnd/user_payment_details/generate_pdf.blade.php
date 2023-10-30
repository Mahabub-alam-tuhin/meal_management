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
            width: 80%;
            margin: 0 auto;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
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
            <h3 class="card-title">Payment List</h3>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Total Meal rate</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user_meals->name }}</td>
                        <td>{{ $meal->date }}</td>
                        <td>{{ $meal->quantity }}</td>
                        <td>{{ $user_meals->total_payable }}</td>
                      
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Paid</th>
                        <th>{{ $user_meals->total_payment }}</th>
                        
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Dues</th>
                        <th>{{ $user_meals->due }}</th>
                     
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
</html>
