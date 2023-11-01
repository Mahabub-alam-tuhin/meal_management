@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
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
                        <th>name</th>
                        <th>user_role</th>
                        <th>email</th>                       
                        <th>mobile</th>
                        <th>Whatsapp Number</th>
                        <th>Telegram Number</th>
                        <th>department</th>
                        <th>address</th>
                        <th>image</th>
                        <th>password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($saveusers as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td> 
                            <td>{{$user->user_role}}</td>                        
                            <td>{{$user->email}}</td> 
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->Whatsapp}}</td>
                            <td>{{$user->Telegram}}</td>
                            <td>{{$user->department}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->image}}</td>
                            <td>{{$user->password}}</td>
                            



                            <td>
                                <a href="{{route('admin.user_management.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('admin.user_management.delete',$user->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                    </tbody>
                </table>
                <div class="row mx-2"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
@endsection