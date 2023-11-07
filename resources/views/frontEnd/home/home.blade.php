@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('frontEnd.Meal_Booking.Meal_Booking') }}" class="btn-book-a-table">Book your meal</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start food_img">
                    @guest
                        <img src="{{ asset('frontEndAsset') }}/img/hero-img.png" class="img-fluid" alt=""
                            data-aos="zoom-out" data-aos-delay="300">
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
