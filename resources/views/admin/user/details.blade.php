@extends('admin.master')

@section('content')
    <div id="calendar"></div>
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">User Meals Information</h5>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Quantity</th>
                        <th>Total Bill</th>
                        <th>Total Paid</th>
                        <th>Total Dues</th>
                        {{-- <th>meal rate</th> --}}
                        <th>Date</th>
                       
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
               
                        
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user_meals->name }}</td>
                                <td> {{ $meal->quantity }}</td>
                                <td>{{ $user_meals->total_payable }}</td>
                                <td> {{ $user_meals->total_payment }}</td>                       
                                <td> {{ $user_meals->due }}</td>
                                {{-- <td> {{ $user_meals->meal_rate->meal_rate }}</td> --}}
                                <td> {{ $meal->date }}</td>
                               
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
              
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- <td>{{ $userPayments[$data['userId']]['total_amount'] ?? 0 }}</td>
<td>{{ $dues[$data['userId']][$data['month']] }}</td> --}}
