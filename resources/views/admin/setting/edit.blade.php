@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.setting.update',$setting->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">shut_down_app</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $setting->shut_down_app }}" name="shut_down_app" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">shut_down_reason</label>
                                <div class="col-sm-9">
                                    <input type="mobile" value="{{$setting->shut_down_reason}}" name="shut_down_reason" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">contact_name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->contact_name}}" name="contact_name" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">contact_number</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->contact_number}}" name="contact_number" class="form-control" id="inputEmailAddress2" placeholder="Department">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">meat_set_last_time</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->meat_set_last_time}}" name="meat_set_last_time" class="form-control" id="inputEmailAddress2" placeholder="Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">meal_set_alert_time</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->meal_set_alert_time}}" name="meal_set_alert_time" class="form-control" id="inputEmailAddress2" placeholder="Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">alert_text_for_all</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->alert_text_for_all}}" name="alert_text_for_all" class="form-control" id="inputEmailAddress2" placeholder="Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">today_meal_coocking_end_time</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$setting->today_meal_coocking_end_time}}" name="today_meal_coocking_end_time" class="form-control" id="inputEmailAddress2" placeholder="Address">
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