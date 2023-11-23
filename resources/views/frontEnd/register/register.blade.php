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
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row g-0">
                <div class="col-lg-4 reservation-img aos-init aos-animate"
                    style="background-image: url({{ asset('frontEndAsset') }}/img/reservation.jpg);" data-aos="zoom-out"
                    data-aos-delay="200">
                </div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form method="POST" action="{{ route('frontEnd.register.store') }}">
                        @csrf
                        <div class="row gy-4" style="padding-left: 5px;">
                            <div class="col-lg-4 col-md-6 head">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="name" placeholder="Your Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                    id="email" placeholder="Your email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                                    id="address" placeholder="Your address">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control"
                                    id="mobile" placeholder="Your mobile">
                                @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Your password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                                @error('terms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4" style="background: var(--color-primary); margin-left: 60px; border-radius: 50px;">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
