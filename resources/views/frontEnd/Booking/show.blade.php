@extends('frontEnd.user-master')

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Meal List</h5>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('frontEnd.Booking.search') }}" method="GET" class="mb-3">
                <div class="form-group">
                    <label for="search-month">Search by Month:</label>
                    <input type="month" id="search-month" name="search_month" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Search</button>
            </form>
            {{-- @if (session('error_today'))
                <div class="alert alert-danger">
                    {{ session('error_today') }}
                </div>
            @endif --}}
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        {{-- <th>Name</th> --}}
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach(array_reverse($meals->all()) as $meal)
                    <tr>
                        <td>{{ $i }}</td>
                        {{-- <td>{{ $meal->user->name }}</td> --}}
                        <td>{{ $meal->quantity }}</td>
                        <td>{{ Carbon\Carbon::parse($meal->date)->toFormattedDateString()  }}</td>
                        {{-- <td>
                            @php
                            $currentTime = now();
                            $mealCutoffTime = now()
                                ->setHour(18)
                                ->setMinute(0)
                                ->setSecond(0);
                            $mealDate = Carbon\Carbon::parse($meal->date);
                        @endphp
                        
                        @if ($currentTime->lte($mealCutoffTime) && $mealDate->isSameDay($currentTime))
                            <a href="{{ route('frontEnd.Booking.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('frontEnd.Booking.delete', $meal->id) }}" class="btn btn-danger">Delete</a>
                        @else
                            <span class="text-danger">Edit & Delete Disabled</span>
                        @endif
                        
                        </td> --}}
                        <td>
                            @if ($meal->date >= \Carbon\Carbon::now())
                                <a href="{{ route('frontEnd.Booking.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('frontEnd.Booking.delete', $meal->id) }}" class="btn btn-danger">Delete</a>
                                @else
                                <p>Edit delete button disable</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
@endsection
