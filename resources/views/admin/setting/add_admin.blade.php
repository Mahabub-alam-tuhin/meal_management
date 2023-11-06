@extends('admin.master')
@section('content')
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <form action="{{ route('admin.setting.store') }}" method="post">
            @csrf
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">shut_down_app</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input type="radio" name="shut_down_app" class="form-check-input" value="1" id="visible_yes">
                                <label class="form-check-label" for="visible_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="shut_down_app" class="form-check-input" value="0" id="visible_no">
                                <label class="form-check-label" for="visible_no">No</label>
                            </div>
                        </div>
                        @error('shut_down_app')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="Serial">shut_down_reason</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" name="shut_down_reason" id="phone" class="form-control"
                                    placeholder="meal_rate" aria-label="john.doe"
                                    aria-describedby="basic-default-phone" />
                            </div>   
                        </div>
                        @error('shut_down_reason')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">contact_name</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact_name" class="form-control" id="email"
                                placeholder="month_start_date" />
                        </div>
                        @error('contact_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">contact_number</label>
                        <div class="col-sm-10">
                            <input type="number" name="contact_number" class="form-control" id="email"
                                placeholder="month_end_date" />
                        </div>
                        @error('contact_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">meat_set_last_time</label>
                        <div class="col-sm-10">
                            <input type="time" name="meat_set_last_time" class="form-control" id="email"
                                placeholder="month_end_date" />
                        </div>
                        @error('meat_set_last_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">meal_set_alert_time</label>
                        <div class="col-sm-10">
                            <input type="time" name="meal_set_alert_time" class="form-control" id="email"
                                placeholder="month_end_date" />
                        </div>
                        @error('meal_set_alert_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">alert_text_for_all</label>
                        <div class="col-sm-10">
                            <input type="text" name="alert_text_for_all" class="form-control" id="email"
                                placeholder="month_end_date" />
                        </div>
                        @error('alert_text_for_all')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">today_meal_coocking_end_time	</label>
                        <div class="col-sm-10">
                            <input type="time" name="today_meal_coocking_end_time" class="form-control" id="email"
                                placeholder="month_end_date" />
                        </div>
                        @error('today_meal_coocking_end_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
    </div>
</div>
@endsection
