@extends('frontEnd.master')

@section('title')
    Login
@endsection
@section('content')
    <section id="book-a-table" class="book-a-table">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-header">
                <h2 style="margin-top: 25px;">Meal Management</h2>
                <p>Please <span>login</span> Your Account</p>
            </div>

            <div class="row g-0">
                <div class="col-lg-4 reservation-img aos-init aos-animate"
                     style="background-image: url({{ asset('frontEndAsset') }}/img/reservation.jpg);"
                     data-aos="zoom-out" data-aos-delay="200">
                </div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row gy-4" style="padding-left: 5px;">
                            <div class="col-lg-12 col-md-6" value="{{ __('mobile') }}">
                                <input type="text" name="mobile" :value="old('mobile')" class="form-control"
                                       id="mobile" placeholder="Your mobile" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-12 col-md-6" value="{{ __('password') }}">
                                <input type="password" name="password" :value="old('password')" class="form-control"
                                       id="password" placeholder="Your password" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-6" value="{{ __('user_role') }}">
                              <select class="form-select" name="user_role" value="{{ __('user_role') }}" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach (App\Models\UserRole::where('user_role', '!=', 'admin')->get() as $quize)
                                    <option value="{{ $quize->user_role }}">{{ $quize->user_role }}</option>
                                @endforeach
                            </select>
                                <div class="validate"></div>
                            </div> --}}
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="margin-left:10px" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
            
                            <x-button class="ml-4" style="background-color: red; margin-left: 60px; border-radius: 50px;">
                                {{ __('Login') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
