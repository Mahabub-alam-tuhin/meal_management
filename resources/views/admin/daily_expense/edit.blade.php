@extends('admin.master')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <form action="{{ route('admin.daily_expense.update', $expense->id) }}" method="post">
                @csrf
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Expense</h5>
                        <small class="text-muted float-end">Edit expense details</small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">Title</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" value="{{ $expense->title }}" name="title" id="title"
                                        class="form-control" placeholder="Title" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="quantity">Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $expense->quantity }}" name="quantity" id="quantity"
                                    class="form-control" placeholder="Quantity" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="unit">Unit</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $expense->unit }}" name="unit" class="form-control"
                                    placeholder="Unit" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="price">Price</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $expense->price }}" name="price" id="price"
                                    class="form-control" placeholder="Price" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="total">Total</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $expense->total }}" name="total" id="total"
                                    class="form-control" placeholder="Total" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="bajar_date">Bajar Date</label>
                            <div class="col-sm-10">
                                <input type="date" value="{{ $expense->bajar_date }}" name="bajar_date"
                                    class="form-control" placeholder="Bajar Date" />
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="status">Status</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $expense->status }}" name="status" class="form-control"
                                    placeholder="Status" />
                            </div>
                        </div> --}}
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
