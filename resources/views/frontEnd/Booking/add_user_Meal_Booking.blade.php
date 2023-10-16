@extends('frontEnd.user-master')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Booked Your Meal</h5>
    </div>
    <form action="{{ route('frontEnd.Booking.store') }}" method="post">
        @csrf        
        <div class="card-body">
            <div class="row">
                <div class="col">
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">user_id</label>
                        <div class="col-sm-9">
                            <input type="text" name="user_id" class="form-control" placeholder="Type your name">
                        </div>
                    </div> --}}
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" name="quantity" class="form-control digits" placeholder="Number">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input class="form-control digits" type="date" name="date" value="2021-01-01">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="reset" class="btn btn-light" value="Cancel">
            </div>
        </div>
    </form>
</div>
@endsection
