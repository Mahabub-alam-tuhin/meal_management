@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.user_management.update',$saveuser->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $saveuser->name }}" name="name" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>
                            
                            {{-- <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">User Role</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="user_role" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach (App\Models\UserRole::get() as $role)
                                        <option value="{{ $role->id }}" @if ($role->id == $saveuser->user_role) selected @endif>{{ $role->user_role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="mobile" value="{{$saveuser->mobile}}" name="mobile" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Whatsapp</label>
                                <div class="col-sm-9">
                                    <input type="mobile" value="{{$saveuser->Whatsapp}}" name="Whatsapp" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Telegram</label>
                                <div class="col-sm-9">
                                    <input type="mobile" value="{{$saveuser->Telegram}}" name="Telegram" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" value="{{$saveuser->email}}" name="email" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                        
                            {{-- <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$saveuser->department}}" name="department" class="form-control" id="inputEmailAddress2" placeholder="Department">
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="inputDepartment" class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="department" id="inputDepartment" aria-label="Select Department">
                                        <option selected>Open this select menu</option>
                                        @foreach ($departments as $depart)
                                            <option value="{{ $depart->id }}" @if ($depart->department == $saveuser->department) selected @endif>
                                                {{ $depart->department }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$saveuser->address}}" name="address" class="form-control" id="inputEmailAddress2" placeholder="Address">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" value="{{$saveuser->password}}" name="password" class="form-control" id="inputEmailAddress2" placeholder="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" value="{{$saveuser->password_confirmation}}" name="password_confirmation" class="form-control" id="inputEmailAddress2" placeholder="password">
                                </div>
                            </div>
                          
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" id="inputAddress4" rows="3" placeholder="Address">{{$saveuser->image}}</>
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