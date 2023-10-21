@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">All USER</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
       
        <form action="{{ route('admin.user.search') }}" method="GET">
            @csrf
            <label for="search"></label>
            <input type="text" name="search" id="search" placeholder="Search by Name, Mobile Number, or Department:">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{ route('admin.user.all_user') }}" class="btn btn-danger">Reset</a>
        </form>

        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                
                <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department</th>
                            <th>name</th>
                            <th>mobile</th>
                            <th>Due</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($userinfo as $meal)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $meal->department }}</td>
                                <td>{{ $meal->name }}</td>
                                <td>{{ $meal->mobile }}</td>
                                <td>{{ $meal->due }}</td>
                                <td>
                                    <a href="{{ route('admin.daily_expense.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.user.delete', $meal->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
