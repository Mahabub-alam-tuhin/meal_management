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
                                <select class="form-select select2 meal_user" name="user_id" aria-label="Default select example">
                                    <option selected>Open this User menu</option>
                                    @foreach (App\Models\User::get() as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">quantity</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="number" name="quantity" id="phone" class="form-control"
                                        placeholder="number" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">date</label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" id="email"
                                    placeholder="email" />
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
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
            </form>
        </div>
    </div>
@endsection
