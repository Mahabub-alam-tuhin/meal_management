<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <a href="{{ route('/') }}" class="logo d-flex align-items-center me-auto me-lg-0 demo_logo">
                    <h5 class="meal">Meal Management<span>.</span></h5>
                </a>
            </div>
            <div class="col-12 col-sm-6 text-end">
                <a class="btn-book-a-table btn-sm register" href="{{ route('frontEnd.register.register') }}">Register</a>
                <a class="btn-book-a-table btn-sm log" href="{{ route('frontEnd.login.login') }}">Login</a>
            </div>
        </div>
    </div>
</header>
