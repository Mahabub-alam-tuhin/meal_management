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
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Meal rate</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @php $i = 1 @endphp
                @foreach ($user_meals->userMeal as $meal)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user_meals->name }}</td>
                        <td>{{ $meal->date }}</td>
                        <td>{{ $meal->quantity }}</td>
                        <td>
                            @if ($meal->meal_rate)
                                {{ $meal->meal_rate->meal_rate }}
                            @else
                                0
                            @endif
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Paid</th>
                    <th>{{ $user_meals->total_payment }}</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Dues</th>
                    <th>{{ $user_meals->due }}</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
@endsection
{{-- <td>{{ $userPayments[$data['userId']]['total_amount'] ?? 0 }}</td>
<td>{{ $dues[$data['userId']][$data['month']] }}</td> --}}
