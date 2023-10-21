@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.meal_rate.update',$mealRate->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">month</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $mealRate->month }}" name="month" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">meal_rate</label>
                                <div class="col-sm-9">
                                    <input type="mobile" value="{{$mealRate->meal_rate}}" name="meal_rate" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">is_visible</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$mealRate->is_visible}}" name="is_visible" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">month_start_date</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$mealRate->month_start_date}}" name="month_start_date" class="form-control" id="inputEmailAddress2" placeholder="Department">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">month_end_date</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$mealRate->month_end_date}}" name="month_end_date" class="form-control" id="inputEmailAddress2" placeholder="Address">
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