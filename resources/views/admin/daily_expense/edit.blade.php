@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.daily_expense.update', $expense->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">title</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $expense->title }}" name="title" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$expense->quantity}}" name="quantity" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">unit</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$expense->unit}}" name="unit" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">price</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$expense->price}}" name="price" class="form-control" id="inputEmailAddress2" placeholder="Department">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">total</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$expense->total}}" name="total" class="form-control" id="inputEmailAddress2" placeholder="Address">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">bajar_date</label>
                                <div class="col-sm-9">
                                    <input type="date" value="{{$expense->bajar_date}}" name="bajar_date" class="form-control" id="inputEmailAddress2" placeholder="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">status</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$expense->status}}" name="status" class="form-control" id="inputEmailAddress2" placeholder="password">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>
    </div>

   
@endsection