@extends('admin.master')

@section('content')
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <form action="{{ route('admin.meal_register.store') }}" method="post">
            @csrf
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Basic Layout</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="date">Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" id="date" placeholder="Date" />
                            @error('date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="meal_user">User Name</label>
                        <div class="col-sm-10">
                            <select class="form-control meal_user" name="user_id[]" id="users" multiple>
                                @foreach (App\Models\User::where('user_role', 'User')->get() as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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

        <script>
            $(document).ready(function() {
                $('#meal_user').select2({
                    allowClear: true,
                    placeholder: 'Search for users',
                    minimumInputLength: 2, // Minimum characters to start searching
                });
            });
        </script>
    </form>
</div>
@endsection
