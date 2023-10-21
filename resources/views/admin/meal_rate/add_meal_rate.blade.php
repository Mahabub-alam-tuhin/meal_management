@extends('admin.master')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <form action="{{ route('admin.meal_rate.store') }}" method="post">
                @csrf
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">month</label>
                            <div class="col-sm-10">
                                <input type="month" name="month" class="form-control" id="name"
                                    placeholder="please enter the name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">meal_rate</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="meal_rate" id="phone" class="form-control"
                                        placeholder="meal_rate" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">is_visible</label>
                            <div class="col-sm-10">
                                <input type="text" name="is_visible" class="form-control" id="email"
                                    placeholder="is_visible" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">month_start_date</label>
                            <div class="col-sm-10">
                                <input type="date" name="month_start_date" class="form-control" id="email"
                                    placeholder="month_start_date" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">month_end_date</label>
                            <div class="col-sm-10">
                                <input type="date" name="month_end_date" class="form-control" id="email"
                                    placeholder="month_end_date" />
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
