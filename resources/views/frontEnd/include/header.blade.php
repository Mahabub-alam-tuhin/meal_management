<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between demo_container">

    <a href="{{ route('/') }}" class="logo d-flex align-items-center me-auto me-lg-0 demo_logo">
      <h1 class="meal">Meal Management<span>.</span></h1>
    </a>

    <div class="user" style="gap: 4px; display:flex;" >
      @if(auth()->user())
        <x-button class="ml-4" style="background: var(--color-primary);  border-radius: 50px;">
          {{ auth()->user()->name }}
        </x-button>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-button class="ml-4 logout-button" style="background: var(--color-primary); border-radius: 50px;">
            {{ __('Logout') }}
        </x-button>
        </form>
      @else
        <a class="btn-book-a-table register" href="{{ route('frontEnd.register.register') }}">Register</a>
        <a class="btn-book-a-table log"  href="{{ route('frontEnd.login.login') }}">Login</a>
      @endif
    </div>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list cross"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header>
