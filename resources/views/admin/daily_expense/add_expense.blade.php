@extends('admin.master')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <form action="{{ route('admin.daily_expense.store') }}" method="post">
                @csrf
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">title</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="title" id="phone" class="form-control"
                                        placeholder="title" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">quantity</label>
                            <div class="col-sm-10">
                                <input type="text" name="quantity" class="form-control" id="email"
                                    placeholder="quantity" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">unit</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="unit" id="phone" class="form-control"
                                        placeholder="unit" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">price</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" class="form-control" id="email"
                                    placeholder="price" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Serial">total</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="total" id="phone" class="form-control"
                                        placeholder="total" aria-label="john.doe"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">bajar_date</label>
                            <div class="col-sm-10">
                                <input type="date" name="bajar_date" class="form-control" id="email"
                                    placeholder="bajar_date" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">status</label>
                            <div class="col-sm-10">
                                <input type="text" name="status" class="form-control" id="email"
                                    placeholder="status" />
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