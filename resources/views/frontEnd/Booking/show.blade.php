@extends('frontEnd.user-master')

@section('content')

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-3">Meal List</h5>
        <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
            <div class="col-md-4 user_role"></div>
            <div class="col-md-4 user_plan"></div>
            <div class="col-md-4 user_status"></div>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($meals as $meal)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $meal->user->name }}</td>
                        <td>{{ $meal->quantity }}</td>
                        <td>{{ $meal->date }}</td>
                        <td>
                            @php
                            $currentTime = now();
                            $mealCutoffTime = now()->setHour(18)->setMinute(0)->setSecond(0);
                            @endphp

                            @if ($currentTime->lte($mealCutoffTime))
                                <a href="{{ route('frontEnd.Booking.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            @else
                                <span class="text-danger">Edit & Delete Disabled</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
