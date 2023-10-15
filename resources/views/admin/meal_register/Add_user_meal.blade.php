@extends('admin.master')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <form action="{{ route('admin.meal_register.store') }}" method="post">
                @csrf
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="date">Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date" />
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="users">User Name</label>
                            <div class="col-sm-10">
                                @foreach (App\Models\User::where('user_role', 'User')->get() as $user)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="user_id[]" value="{{ $user->id }}" id="user_{{ $user->id }}">
                                        <label class="form-check-label" for="user_{{ $user->id }}">{{ $user->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        
        </form>

    @endsection
