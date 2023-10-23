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
                        <th>User ID</th>
                        {{-- <th>Date</th>
                        <th>Quantity</th>
                        <th>Meal Rate</th>
                        <th>Monthly Total meal bill</th> --}}
                        <th>payment</th>
                        <th>Dues</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($monthlyCosts as $userId => $userData)
                        @foreach ($userData as $month => $data)
                        {{-- @dd($userData); --}}
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data['userId'] }}</td>
                                {{-- <td>{{ $data['month'] }}</td>
                                <td>{{ $data['quantity'] }}</td>
                                <td>{{ $data['userRate'] }}</td>
                                <td>{{ $data['cost'] }}</td> --}}
                                {{-- @dd($userPaymentData); --}}
                                <td>
                                    @if (isset($userPaymentData[$data['userId']]) && isset($userPaymentData[$data['userId']]['amount']))
                                        {{ $userPaymentData[$data['userId']]['amount'] }}
                                    @else
                                        0
                                    @endif
                                </td>
                                <td>
                                    @if (isset($dues[$data['userId']][$data['month']]))
                                        {{ $dues[$data['userId']][$data['month']] }}
                                    @else
                                        0
                                    @endif
                                </td>
                                
                                
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
