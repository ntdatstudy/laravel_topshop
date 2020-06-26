<section class="header__nav">
    <div class="content">
        <div class="container-fluid content__container">
            <button id="btn-open-menu" class="btn-menu">
                <img src="{{ asset('img/menu.png') }}">
            </button>
            <form>
                <input placeholder="@lang('app.search')">
                <button><span class="topshop-icon__search"></span></button>
            </form>
            @if (Auth::user())
                <button class="link-account logged-in">
                    <span class="topshop-icon__account"></span>
                    <div class="link-account__dropdown">
                        <b>{{ Auth::user()->name }}</b>
                        @if (Auth::user()->role != 'admin')
                            <a href="#">@lang('app.view_profile')</a>
                        @endif
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </button>
            @else
                <a class="link-account" href="{{ route('login') }}">
                    <span class="topshop-icon__account"></span>
                </a>
            @endif
            <button class="btn-flag">
                <span>@lang('app.denomination_symbol')</span>
                <span class="flag-icon__uk"></span>
            </button>
            <a class="link-wishlist" href="#">
                <span class="topshop-icon__wishlist"></span>
            </a>
            <button class="btn-flag">
                <span class="topshop-icon__cart"></span>
            </button>
        </div>
    </div>
    <nav class="nav">
        <div class="container-fluid nav__container">
            <a class="logo" href="/"><img src="{{ asset('img/logo.svg') }}"></a>
            <button id="btn-close-menu" class="btn-close">
                <img src="{{ asset('img/close.png') }}">
            </button>
            @include('components.header.categories')
        </div>
    </nav>
</section>