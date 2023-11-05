@extends('frontEnd.master')

@section('title')
    Register
@endsection

@section('content')
    <section id="book-a-table" class="book-a-table">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-header">
                <h2 style="margin-top: 25px;">Meal Management</h2>
                <p>Please <span>Register</span> Your Account</p>
            </div>

            <div class="row g-0">
                <div class="col-lg-4 reservation-img aos-init aos-animate"
                     style="background-image: url({{ asset('frontEndAsset') }}/img/reservation.jpg);"
                     data-aos="zoom-out" data-aos-delay="200">
                </div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form method="POST" action="{{ route('frontEnd.register.store') }}">
                        @csrf
                        <div class="row gy-4"  style="padding-left: 5px;">
                            <div class="col-lg-4 col-md-6 head" value="{{ __('Name') }}">
                                <input type="text" name="name" :value="old('name')" class="form-control"
                                       id="name" placeholder="Your Name" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6" value="{{ __('Email') }}">
                                <input type="text" name="email" :value="old('email')" class="form-control"
                                       id="email" placeholder="Your email" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6" value="{{ __('address') }}">
                                <input type="text" name="address" :value="old('address')" class="form-control"
                                       id="address" placeholder="Your address" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6" value="{{ __('mobile') }}">
                                <input type="text" name="mobile" :value="old('mobile')" class="form-control"
                                       id="mobile" placeholder="Your mobile" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6" value="{{ __('password') }}">
                                <input type="password" name="password" :value="old('password')" class="form-control"
                                       id="password" placeholder="Your password" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6" value="{{ __('Confirm Password') }}">
                                <input type="password_confirmation" name="password_confirmation" :value="old('password_confirmation')" class="form-control"
                                       id="password_confirmation" placeholder="Your password_confirmation" data-rule="minlen:4"
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
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> --}}
                            <x-button class="ml-4" style="background-color: red; margin-left: 60px; border-radius: 50px;">
                              {{ __('Register') }}
                          </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
