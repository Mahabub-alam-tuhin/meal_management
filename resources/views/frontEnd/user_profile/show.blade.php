@extends('frontEnd.user-master')
@section('content')

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-3">User Profile</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Name:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Mobile:</th>
                <td>{{ $user->mobile }}</td>
            </tr>
            <tr>
                <th>Department:</th>
                <td>{{ $user->department }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $user->address }}</td>
            </tr>
        </table>
        
        <a href="{{ route('frontEnd.user_profile.edit',$user->id) }}" class="btn btn-primary">Edit Profile</a>
    </div>
</div>

@endsection
