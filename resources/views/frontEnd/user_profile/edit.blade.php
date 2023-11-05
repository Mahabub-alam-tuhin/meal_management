@extends('frontEnd.user-master')
@section('content')

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-3">Edit Profile</h5>
    </div>
    <div class="card-body">
        @if ($errors->has('current_password'))
            <div class="alert alert-danger">
                {{ $errors->first('current_password') }}
            </div>
        @endif
        {{-- @if ($errors->has('success'))
            <div class="alert alert-danger">
                {{ $errors->first('success') }}
            </div>
        @endif --}}

        <form method="POST" action="{{ route('frontEnd.user_profile.update', $user->id) }}">
            @csrf
            {{-- @method('PATCH') --}}
            <p>You can't update your informaton without given current Password</p>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for ="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" id="mobile" value="{{ $user->mobile }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" name="department" id="department" value="{{ $user->department }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" class="form-control">{{ $user->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>

            <div class="form-group change">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

@endsection
