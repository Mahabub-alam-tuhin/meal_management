@extends('admin.master')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <form action="{{ route('admin.meal.store') }}" method="post">
                @csrf
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="role">User Name</label>
                            <div class="col-sm-10">
                                <select class="form-select select2 meal_user" name="name" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach (App\Models\User::get() as $user)
                                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">users_id</label>
                            <div class="col-sm-10">
                                <input type="text" name="users_id" class="form-control" id="name"
                                    placeholder="please enter the name" />
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">quantity</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="quantity" id="phone" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">date</label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" id="email"
                                    placeholder="email" />
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