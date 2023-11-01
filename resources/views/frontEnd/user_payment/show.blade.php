@extends('frontEnd.user-master')
@section('content')

    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title mb-3">Payment List</h5>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('user-payments.pdf') }}" class="btn btn-primary">Download PDF</a>
                </div>
            </div>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>month</th>
                        {{-- <th>users_id</th> --}}
                        <th>payment_date</th>
                        <th>amount</th>
                    </tr>
                    </thead>
                    <thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($userPayments as $Payments)
                        <tr>
                            {{-- @dd($meal); --}}
                            <td>{{$i++}}</td>
                            <td>{{ Carbon\Carbon::parse($Payments->month)->toFormattedDateString()  }}</td>
                            <td>{{ Carbon\Carbon::parse($Payments->payment_date)->toFormattedDateString()  }}</td>
                            <td>{{$Payments->amount}}</td>                         
                        </tr>
                    @endforeach
                    </thead>
                    </tbody>
                </table>
        </div>
    </div>
@endsection