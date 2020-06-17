<nav class="nav-container">
    <div>
        logo
    </div>

    <div class="nav-action-container">
        @guest
            <a class="btn"
               href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="btn"
                   href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a class="btn"
               href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form-nav').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form-nav"
                  action="{{ route('logout') }}"
                  method="POST>
                @csrf
            </form>
        @endguest
        <div>search</div>
        <div>hambuger icon</div>
    </div>
</nav>
