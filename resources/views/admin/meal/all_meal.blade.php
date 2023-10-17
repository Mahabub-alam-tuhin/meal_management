@extends('admin.master')
@section('content')
    <div id="calendar"></div>
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
            <form action="{{ route('admin.meal.search') }}" method="GET">
                @csrf
                <label for="selectedDate">Select Date:</label>
                <input type="date" name="selectedDate" id="selectedDate">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('admin.meal.all_meal') }}" class="btn btn-danger">Reset</a>
            </form>
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
                    @foreach ($meals as $meal)
                        <tr>
                            <td>{{ $i++ }}</td>
                            {{-- <td>{{ $meal->user->name }}</td> --}}
                            <td>{{ optional($meal->user)->name }}</td>
                            <td>{{ $meal->quantity }}</td>
                            <td>{{ $meal->date }}</td>
                            <td>
                                <a href="{{ route('admin.meal.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('admin.meal.delete', $meal->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
