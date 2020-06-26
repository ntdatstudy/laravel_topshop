<header id="header">
    <nav class="container-fluid header__topnav">
        <button id="btn-open-menu">
            <img src="{{ asset('img/menu.png') }}">
        </button>
        <button id="btn-close-menu">
            <img src="{{ asset('img/close.png') }}">
        </button>
        <a class="logo" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('img/logo.svg') }}">
        </a>
        <div>
            <a class="logout" href="{{ route('logout') }}" title="Logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{ asset('img/exit.png') }}">
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
</header>